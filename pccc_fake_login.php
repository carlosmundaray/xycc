<?php

global $current_user;

if ( is_user_logged_in() ) {
     
     get_currentuserinfo();

     $db_user = 'root';
     $db_host = 'localhost';
     $db_name = 'wordpress';
     $db_password = 'Hpinvent123';
     $user_exist = false;

     // Connecting to and selecting a MySQL database named sakila
     // Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
     $user_con = new mysqli($db_host, $db_user, $db_password, $db_name);

     // Check if password was already registered
     $sql = "SELECT id FROM wp_cred WHERE user_id = " . $current_user->id;
     $query = mysqli_query($user_con, $sql);

     if(mysqli_num_rows($query) > 0) { $user_exist = true; }
     if($user_exist == false){
          header("Location: https://portal.pccc.edu/login.php");
          die();
     }

}

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     global $current_user;

     if ( is_user_logged_in() ) {
          get_currentuserinfo();
     }

     $db_user = 'root';
     $db_host = 'localhost';
     $db_name = 'wordpress';
     $db_password = 'Hpinvent123';

     // Connecting to and selecting a MySQL database named sakila
     // Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
     $user_con = new mysqli($db_host, $db_user, $db_password, $db_name);

     $user_id = $current_user->id;
     $user_name = $current_user->user_login;
     $user_password = mysqli_real_escape_string($_POST['password'],$user_con);

     // Perform an SQL query
     $sql = "INSERT INTO wp_cred (id, user_id, user_name, user_pass) VALUES (NULL, '{$user_id}', '{$user_name}', '{$user_password}');";
     if ($mysqli->query($sql)) {
         header("Location: https://portal.pccc.edu");
         die();
     }

}

?>
