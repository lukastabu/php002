@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change Animal</div>

                    <div class="card-body">
                        <form action="{{ route('animal-update', $animal) }}" method="POST">
                            Animal Name: <input type="text" name="create_animal_name" value={{ $animal->name }} />
                            Animal Height: <input type="number" name="create_animal_height"
                                value={{ $animal->height }} />
                            Animal Color:
                            <select name="create_color_id">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" @if ($color->id == $animal->color_id) selected @endif>
                                        {{ $color->name }}</option>
                                @endforeach
                            </select>

                            @csrf
                            @method('put')
                            <button class="btn btn-outline-success" type="submit">CHANGE TO THIS</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
