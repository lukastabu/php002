<?php

namespace Obankas\Controllers;
use Obankas\App;


class HomeController {
    public function index()
    {
        return App::view('home');
    }
}