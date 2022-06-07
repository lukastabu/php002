<?php

namespace Obankas;
use Obankas\Controllers\HomeController;
use Obankas\Messages;

class App {

    const DOMAIN = 'bankas.lt';

    public static function start(){
        session_start();
        Messages::init();

        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri);
        self::route($uri);

        // print_r($uri);
        // echo 'valio';
    }

    public static function view(string $name, array $data = [])
    {
        extract($data);
        require __DIR__ . '/../views/'.$name.'.php';
    }

    public static function redirect($url = '')
    {
        header('Location: http://'.self::DOMAIN.'/'.$url);
    }

    private static function route(array $uri)
    {
        $m = $_SERVER['REQUEST_METHOD'];

        if (count($uri) == 1 && $uri[0] === '') {
            return (new HomeController)->index();
        }
        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'forma') {
            return (new HomeController)->form();
        }
        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'forma') {
            return (new HomeController)->doForm();
        }
        else {
            echo 'kitkas';
        }
    }

}