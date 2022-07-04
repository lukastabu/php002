<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function sumarum(Request $request, $a, $b)
    {
        dump($a + $b);
        $c = $a + $b;
        // return "suma = $c";
        return view('suma', ['rez'=> $c]);
    }
}


