<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'Welcome',
        'description' => 'This is a simple social network that allows you to share posts to the rest of the world.'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users.'
      ];

      $this->view('pages/about', $data);
    }
  }
