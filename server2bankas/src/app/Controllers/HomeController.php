<?php

namespace BankasV2\Controllers;
use BankasV2\App;

class HomeController{
    public function __construct()
  {
      if (!LogController::isLogged()) {
          App::redirect('login');
      }
  }
    public function index(){
        return App::view('home', ['title' => 'Bankas ver2']);
    }
    
}