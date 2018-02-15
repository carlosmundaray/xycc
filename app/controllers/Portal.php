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
  }
