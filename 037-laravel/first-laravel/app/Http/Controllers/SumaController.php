<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class SumaController extends Controller
{
    public function sumarum(Request $request, $a, $b)
    {
        dump($a + $b);
        $c = $a + $b;
        // return "suma = $c";
        return view('suma', ['rez'=> $c]);
    }

    public function skirtum(Request $request)
    {
        $colors = Color::all();
        $rodyti = $request->session()->get('ats', '');
        return view('post.atimtis', [       // dedasi taskas vietoj slash
            'ro' => $rodyti,
            'colors' => $colors
        ]);    
    }

    public function calculate(Request $request)
    {
        $rez = $request->x - $request->y;
        // $request->session()->flash('ats', $rez);
        $color = new Color;
        $color->color = $rez;
        $color->save();        
        dump($rez);
        return redirect()->route('formike')->with('ats', $rez);
    }

}


