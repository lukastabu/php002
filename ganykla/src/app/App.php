<?php

namespace Ganykla;
use Ganykla\Controllers\HomeController;


class App
{
    const DOMAIN = '//localhost/bit22/php/ganykla/public';

    public static function start()
    {
        $uri = str_replace('/bit22/php/ganykla/', '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);
        array_shift($uri);
        self::router($uri);
    }

    private static function router(array $uri)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->index();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 1 && $uri[0] === '') {

            return (new HomeController())->keep();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === 'list') {

            return (new HomeController())->list();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 2 && $uri[0] === 'delete') {
            return (new HomeController())->deleteUnit($uri[1]);
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 2 && $uri[0] === 'edit') {

            return (new HomeController())->toAdd($uri[1]);
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 2 && $uri[0] === 'edit') {

            return (new HomeController())->add($uri[1]);
        }
    }
    public static function view(string $name, array $data = [])
    {
        extract($data);
        require __DIR__. '/../views/'.$name.'.php';
    }
    public static function redirect(string $name){
        header('Location: http://'.self::DOMAIN.'/'.$name);
    }
}
