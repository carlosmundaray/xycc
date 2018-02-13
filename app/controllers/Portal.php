<?php
  class Portal extends Controller {

    public function __construct(){
      //Check Model
      $this->userModel = $this->model('User');
    }

    public function index(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('portal/dash', $data);
    }
    public function login(){
      //Check for Post
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process Form

        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => 'Login',
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => ''
        ];

        // Validate Email
        if (empty($data['email'])) {
          $data['email_err'] == 'Please enter Email';
        }

        // Validate Password
        if (empty($data['password'])) {
          $data['password_err'] == 'Please enter First Name';
        }

        // Make sure error are empty to process form
        if ( empty($data['email_err']) && empty($data['password_err']) ) {
          # code...
        } else {
          $this->view('portal/login', $data);
        }

      } else {
        $data = [
          'title' => 'Users',
          'email' => '',
          'password' => '',
          'password_err' => '',
          'email_err' => ''
        ];

        $this->view('portal/login', $data);
      }
    }

  }
