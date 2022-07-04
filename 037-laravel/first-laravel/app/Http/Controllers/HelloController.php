<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function Labdien(Request $request)
    {
        dump($request->kiek);
        return 'Laba diena, Lara drauge!';
    }

    public function Ate(Request $request, $kardas = 'default reiksme')
    {
        dump($kardas);
        return 'Ate, Lara!';
    }

    public function Hibye(Request $request, $la, $ba)
    {
        dump($la.' ir '.$ba);
        return 'hi and bye, Lara!';
    }
}
