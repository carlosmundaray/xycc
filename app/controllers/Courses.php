<?php
  class Courses extends Controller {

    public function __construct(){
      //Check Model
      $this->userModel = $this->model('Course');
    }

    // View and Register [GET/POST]
    public function index(){

      if(isLoggedIn()){
        block('student','dash');
        block('teacher','dash');
      } else {
        redirect('users/login');
      }

      //Check for Post
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => 'Courses'
        ];


      } else {

        // Get: Show all Users with Pagination

        $data = [
          'title' => 'Courses'
        ];

        $this->view('courses/index', $data);
      }
    }

    // Functions
    private function isErrors($errors){
          foreach ($errors as $key => $value) {
               if(!empty($value)){
                    return true;
               } else {
                    return false;
               }
          }
    }

  }
