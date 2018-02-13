<?php

/**
 * Portal Model Class
 */
class User
{
  // Classes
  private $db;
  private $pagination;

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

  public function registerUser() {
    $query = 'INSERT INTO users ';
    $query .= '( first_name, last_name, email, password, role, gender, avatar, address, city, state, zip, phone )';
    $query .= ' VALUES ( :first_name, :last_name, :email, :password, :role, :gender, :avatar, :address, :city, :state, :zip, :phone );';
    $this->db->query($query);

    $this->avatar = "https://robohash.org/" . $this->email;
    $this->password = $this->randomPassword();

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
    $this->db->execute();
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
