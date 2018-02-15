<?php

/**
 * Portal Model Class
 */

class User
{
  // Classes
  private $db;
  private $pagination;
  private $mail;

  // User Info
  public $first_name;
  public $last_name;
  public $email;
  public $password;
  public $role;
  public $gender;
  public $avatar;
  public $address;
  public $city;
  public $state;
  public $zip;
  public $phone;

  public function __construct()
  {
    $this->db = new Database;
  }

  /**
   * This funstion uses the Pagination Helper class. Its goal is to
   * find all users, divide the list of users by the limit [$_GET]
   * return a list of user and return a list of pagination links.
   * @return array Returns two arrays. A user list and html pagination links.
   */
  public function findAllUsersPag(){

    //Set Parameters
    $query = 'SELECT * FROM users ORDER BY role, first_name';
    $total = $this->db->rowCountExecute($query);
    $page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

    // Call Pagination Class
    $this->pagination = new Pagination($query, $total, $page, $limit, $links);
    $this->db->query($this->pagination->getData());

    // Return UserList and Pagination Links HTML into Array
    return $array = ['userList' => $this->db->resultset(), 'paginationLinks' => $this->pagination->createLinks()];
  }

  /**
   * Returns an array of a single user. Finds the user by the selected id.
   * @param int Id
   * @return array Returns an array of a single user
   */
  public function findById($id){
    $query = 'SELECT * FROM users WHERE id = :id';
    $this->db->query($query);
    $this->db->bind(':id', $id);
    return $this->db->single();
  }

  public function registerUser() {
    $query = 'INSERT INTO users ';
    $query .= '( first_name, last_name, email, password, role, gender, avatar, address, city, state, zip, phone, activation_code, active )';
    $query .= ' VALUES ( :first_name, :last_name, :email, :password, :role, :gender, :avatar, :address, :city, :state, :zip, :phone, :activation_code, :active );';
    $this->db->query($query);

    $random_password = $this->randomPassword();
    $hashed_password = Bcrypt::hashPassword($random_password);
    $this->avatar = "https://robohash.org/" . $this->email;
    $this->password = $hashed_password;
    
    // generate verification code, acts as the "key"
    $activation_code = md5(uniqid("yourrandomstringyouwanttoaddhere", true));

    $this->db->bind(':first_name', $this->first_name);
    $this->db->bind(':last_name', $this->last_name);
    $this->db->bind(':email', $this->email);
    $this->db->bind(':password', $this->password);
    $this->db->bind(':role', $this->role);
    $this->db->bind(':gender', $this->gender);
    $this->db->bind(':avatar', $this->avatar);
    $this->db->bind(':address', $this->address);
    $this->db->bind(':city', $this->city);
    $this->db->bind(':state', $this->state);
    $this->db->bind(':zip', $this->zip);
    $this->db->bind(':phone', $this->phone);
    $this->db->bind(':activation_code', $activation_code);
    $this->db->bind(':active', 0);

    if($this->db->execute()){
      $id = $this->db->lastInsertId();
      // Send email verification link
      // $activation_link = ROOT . "portal/activate/?code=" . $activation_code . '?user=' . $id;
      $this->sendEmailPassword($random_password, $this->email);

      // echo $random_password;

      // Return to Model
      return true;

    } else {

      return false;

    }
  }

  public function userRoleCount($role){
    $query = "SELECT id FROM users WHERE role = :role";
    $this->db->query($query);
    $this->db->bind(':role', $role);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function userGenderCount($gender){
    $query = "SELECT id FROM users WHERE gender = :gender";
    $this->db->query($query);
    $this->db->bind(':gender', $gender);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function allUserCount(){
    $query = "SELECT id FROM users";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  /**
   * Recommended way to activate a user. Sends an email to the newly registered user
   * with a link to activate account.
   * 
   * @param string $activation_link
   * @param string $email
   * @return void
   */
  private function sendEmailActivator($activation_link, $email){
    $to      = $email;
    $subject = 'XYCC Account Activation';

    // Message
    $message  = 'You have been registered to XYCC';
    $message .= '<br>Please visit the following link to activate your XYCC Account: ' . $activation_link;
    $headers = 'From: activator@xycc.edu' . "\r\n" .
        'Reply-To: activator@xycc.edu' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
  }

  /**
   * Sends an email to a newly registered user with email and password.
   * Please don't use this in future projects. Its recomended to user an activator insteaad
   * Use: $this->sendEmailActivator
   *
   * @param string $password
   * @param string $email
   * @return void
   */
  private function sendEmailPassword($password, $email){
    $to      = $email;
    $subject = 'XYCC Account Info';

    // Message
    $message  = 'You have been registered to XYCC<br>';
    $message .= 'Please visit the following link to log into your XYCC Account: ' . ROOT . 'portal/login' . '<br>';
    $message .= 'Username: ' . $email . '<br>';
    $message .= 'Password: ' . $password;

   // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'To: <' . $email . '>';
    $headers[] = 'From: XYCC <xycc@xycc.edu>';
    
    mail($to, $subject, $message, implode("\r\n", $headers));
  }

  public function login($email, $password){
    $this->db->query('SELECT * FROM users WHERE email = :email');
    $this->db->bind(':email', $email);

    $row = $this->db->single();
    $hashed_password = $row['password'];

    if(Bcrypt::checkPassword($password, $hashed_password)){
      $this->createUserSession($row['id']);
    } else {
      return false;
    }
  }

  // Find user by email
  public function findUserByEmail($email){
    $this->db->query('SELECT id FROM users WHERE email = :email');
    // Bind value
    $this->db->bind(':email', $email);

    $this->db->single();

    // Check row
    if($this->db->rowCount() > 0){
      return true;
    } else {
      return false;
    }
  }

  public function createUserSession($id){
    $_SESSION['user_id'] = $id;
    redirect('portal/dash');
  }

  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('portal/login');
  }

  public function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

  public function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }

}

?>
