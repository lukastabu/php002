@extends('mainexmp')
@section('content')
    <h2>Creating New Animal</h2>
    <ul>
        <form action="{{ route('animal-store') }}" method="POST">
            Animal Name: <input type="text" name="create_animal_name" />
            Animal Height: <input type="number" name="create_animal_height" />
            Animal Color:
            <select name="create_color_id">
                @foreach ($colors as $color)
                    <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
            @csrf
            <button type="submit">ADD THIS</button>
        </form>
    </ul>
@endsection
