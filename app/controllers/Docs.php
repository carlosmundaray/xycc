<?php
  class Docs extends Controller {
    public function __construct(){

    }

    public function index(){
      $this->view('docs/index');
    }

    public function database(){
      $this->view('docs/database');
    }

  }
