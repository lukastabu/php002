<?php

namespace Obankas\Controllers;
use Obankas\App;
use Obankas\Messages as M;


class HomeController {
    public function index()
    {
        $list = [];
        for ($i=0; $i < 10; $i++) { 
            $list[] = rand(10, 99);
        }
        return App::view('home', ['title' => 'Obankis',
        'list' => $list]);
    }

    public function indexJson()
    {
        $list = [];
        for ($i=0; $i < 10; $i++) { 
            $list[] = rand(10, 99);
        }
        return App::json(['title' => 'Obankis',
        'list' => $list]);
    }

    public function form()
    {
        return App::view('form', ['messages'=> M::get()]);
    }

    public function doForm()
    {
        M::add('Pavyko, puiku!', 'alert');
        M::add($_POST['formfield'], 'success');
        return App::redirect('forma');
    }
}