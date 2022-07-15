<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $animals = Animal::orderBy('name')->get();

        $animals = match($request->sort) {
            'asc' => Animal::orderBy('name', 'asc')->get(),
            'desc' => Animal::orderBy('name', 'desc')->get(),
            default => Animal::all(),
        };

        return view('animal.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();

        return view('animal.create', ['colors' => $colors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal;

        $animal -> name = $request->create_animal_name ?? 'No name yet';

        $animal -> height = $request->create_animal_height;

        $animal -> color_id = $request->create_color_id;

        $animal -> save();

        return redirect()->route('animal-index')->with('success', 'Your new Animal is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(int $animalId)
    {
        $animal = Animal::where('id', $animalId)->first();

        return view('animal.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $colors = Color::all();

        return view('animal.edit', [
            'animal' => $animal,
            'colors' => $colors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $animal -> name = $request->create_animal_name ?? 'No name yet';

        $animal -> height = $request->create_animal_height;

        $animal -> color_id = $request->create_color_id;

        $animal -> save();

        return redirect()->route('animal-index')->with('success', 'Your Animal is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal -> delete();

        return redirect()->route('animal-index')->with('deleted', 'Your animal is gone');
    }
}
