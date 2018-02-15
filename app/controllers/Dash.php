<?php
  class Dash extends Controller {

    public function __construct(){
    }

    public function index(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('dash/index', $data);
    }
  }
