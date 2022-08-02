@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change Animal</div>

                    <div class="card-body list-group">
                        <form action="{{ route('animal-update', $animal) }}" method="POST">
                            <li class="list-group-item"> Animal Name: <input type="text" name="create_animal_name" value={{ $animal->name }} /> </li>
                            <li class="list-group-item"> Animal Height: <input type="number" name="create_animal_height"
                                value={{ $animal->height }} /> </li>
                            <li class="list-group-item"> Animal Color:
                            <select name="create_color_id">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" @if ($color->id == $animal->color_id) selected @endif>
                                        {{ $color->name }}
                                    </option>
                                @endforeach
                            </select> </li>

                            @csrf
                            @method('put')
                            <button class="btn btn-outline-success m-3" type="submit">Save Changes</button>
                            <a class="btn btn-outline-danger ml-3" href="{{ route('animal-index') }}">Cancel</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
