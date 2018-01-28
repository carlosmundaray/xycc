<?php
  class Docs extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'Docs'
      ];
      $this->view('docs/index', $data);
    }

    public function database(){
      $data = [
        'title' => 'Docs: Database'
      ];
      $this->view('docs/database', $data);
    }

  }
