<?php

namespace BankasV2;

use BankasV2\Controllers\HomeController;
use BankasV2\Controllers\AccountController;
use BankasV2\Controllers\CreateController;
use BankasV2\Controllers\LogController;
use BankasV2\Messages;

class App
{
    const DOMAIN = 'bankas-v2.lt';

    public static function start()
    {
        session_start();
        Messages::init();
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri);
        self::router($uri);
    }

    private static function router(array $uri)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->index();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === 'accounts') {

            return (new AccountController())->list();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === 'create') {
            return (new CreateController())->toCreatePage();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 1 && $uri[0] === 'create') {
            return (new CreateController())->keep();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 2 && $uri[0] === 'add') {
            return (new AccountController())->add($uri[1]);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 2 && $uri[0] === 'add') {
            return (new AccountController())->addMoney($uri[1]);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 2 && $uri[0] === 'remove') {
            return (new AccountController())->remove($uri[1]);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 2 && $uri[0] === 'remove') {
            return (new AccountController())->outMoney($uri[1]);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 2 && $uri[0] === 'delete') {
            return (new AccountController())->deleteAccount($uri[1]);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === 'logout') {
            return (new LogController())->logout();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($uri) == 1 && $uri[0] === 'login') {
            return (new LogController())->showLogin();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($uri) == 1 && $uri[0] === 'login') {
            return (new LogController())->login();
        } 
        
        else { echo 'pasiklydai';
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
