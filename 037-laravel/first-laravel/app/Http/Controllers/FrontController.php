<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Color;
use DB;


class FrontController extends Controller
{
    public function index(Request $request)
    {
        // dd($animal);
        $animalsDir = match($request->sort) {
            'color-asc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('colors.name', 'asc')
                    ->orderBy('animals.name', 'asc')
                    ->get(), 'color-asc'],
            'color-desc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('colors.name', 'desc')
                    ->orderBy('animals.name', 'asc')
                    ->get(), 'color-desc'],
            'animal-asc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('animals.name', 'asc')
                    ->orderBy('colors.name', 'asc')
                    ->get(), 'animal-asc'],
            'animal-desc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('animals.name', 'desc')
                    ->orderBy('colors.name', 'asc')
                    ->get(), 'animal-desc'],
            'height-asc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('animals.height', 'asc')
                    ->orderBy('animals.name', 'asc')
                    ->get(), 'height-asc'],
            'height-desc' => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('animals.height', 'desc')
                    ->orderBy('animals.name', 'asc')
                    ->get(), 'height-desc'],
            default => [DB::table('animals')
                    ->join('colors', 'colors.id', '=', 'animals.color_id')
                    ->select('colors.name as colorName', 'colors.*', 'animals.*')
                    ->orderBy('animals.id', 'asc')
                    ->get(), 'default']          
        };
        return view('front.index', [
            'animals' => $animalsDir[0],
            'sort' => $animalsDir[1],
            'colors' => Color::all(),
        ]);
    }
}
