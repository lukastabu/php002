<?php

namespace Obankas\Controllers;
use Obankas\App;
use Obankas\Messages as M;



class LoginController {
    public function showLogin()
    {
        return App::view('login');
    }
    public function doLogin()
    {
        $users = json_decode(file_get_contents(App:APP.'data/users.json'));
        foreach ($users as $user) {
            if ($_POST['name'] != $user->usernname){
                continue;
            }

            if (md5($_POST['password']) != $user->userpass) {
                M::add('Labai blogai', 'alert');
                return App::redirect('login');
            }
        }
            else {
                M::add('Labai gerai', 'success');
                return App::redirect('forma');

            }
            }
        }

    }

}