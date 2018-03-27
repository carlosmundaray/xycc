<?php
  class Dash extends Controller {

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }
    }

    public function index(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('dash/index', $data);
    }
  }
