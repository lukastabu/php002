@extends('mainexmp')
@section('content')
    <ul>
        <form action="{{ route('color-store') }}" method="POST">
            Name of Color: <input type="text" name="create_color_name" />
            Color: <input type="color" name="create_color_input" />
            @csrf
            <button type="submit">ADD THIS</button>
        </form>
    </ul>
@endsection
