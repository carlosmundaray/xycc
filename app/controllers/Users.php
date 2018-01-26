<?php

/**
 * Users Controller
 */
class Users extends Controller
{

  function __construct()
  {
    # code...
  }

  function register(){
    // Check for Post Method (Use this instead of if (isset($_POST['submit'])))
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Form Posted

    } else {

      // Init Data to Keep data submitted in case of an error
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_pass' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load View
      $this->view('users/register', $data);
    }
  }

  function login(){
    // Check for Post Method (Use this instead of if (isset($_POST['submit'])))
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Form Posted

    } else {

      // Init Data to Keep data submitted in case of an error
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => ''
      ];

      // Load View
      $this->view('users/login', $data);
    }
  }
}


 ?>
