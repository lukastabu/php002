@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Animal</div>

                    <div class="card-body list-group">
                        <form action="{{ route('animal-store') }}" method="POST">
                            <li class="list-group-item">Animal Name: <input type="text" name="create_animal_name" /></li>
                            <li class="list-group-item">Animal Height: <input type="number" name="create_animal_height" /></li>
                            <li class="list-group-item">Animal Color:
                            <select name="create_color_id">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                            </li>
                            @csrf
                            <button class="btn btn-outline-success" type="submit">Add Animal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
