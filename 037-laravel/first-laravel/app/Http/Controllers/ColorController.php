<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $colors = Color::all()->sortByDesc('name');
        $colors = Color::orderBy('name')->get();
        // $colors = Color::orderBy('name', 'desc')->orderBy('color', 'asc')->get();
        // $colors = Color::where('id', '>', 1)->orderBy('name')->get();

        $colors = match($request->sort) {
            'asc' => Color::orderBy('name', 'asc')->get(),
            'desc' => Color::orderBy('name', 'desc')->get(),
            default => Color::all(),
        };

        return view('color.index', ['colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = new Color;

        $color -> name = $request->create_color_name ?? 'No name yet';

        $color -> color = $request->create_color_input;

        $color -> save();

        return redirect()->route('color-index')->with('success', 'Your new color is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(int $colorId)
    {
        $color = Color::where('id', $colorId)->first();

        return view('color.show', ['color' => $color]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('color.edit', ['color' => $color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        $color -> name = $request->create_color_name ?? 'No name yet';

        $color -> color = $request->create_color_input;
        
        $color -> save();

        return redirect()->route('color-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        if(!$color ->takeanimal->count()) {
            $color -> delete();
            return redirect()->route('color-index')->with('deleted', 'Your color is deleted');
        }
        return redirect()->back()->with('deleted', 'Your color has linked animals - deletion is not allowed');
    


    }
}
