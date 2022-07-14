@extends('mainexmp')
@section('content')
    <ul>
        <form action="{{ route('animal-update', $animal) }}" method="POST">
            Animal Name: <input type="text" name="create_animal_name" value={{ $animal->name }} />
            Animal Height: <input type="number" name="create_animal_height" value={{ $animal->height }} />
            Animal Color:
            <select name="create_color_id">
                @foreach ($colors as $color)
                    <option value="{{$color->id}}" @if($color->id == $animal->color_id) selected @endif >{{$color->name}}</option>
                @endforeach
            </select>

            @csrf
            @method('put')
            <button type="submit">CHANGE TO THIS</button>
        </form>
    </ul>
@endsection
