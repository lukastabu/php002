@extends('mainexmp')
@section('content')
<ul>
<form action="{{route('color-update', $color)}}" method="POST">
Name of Color: <input type="text" name="create_color_name" value={{$color->name}} />
Color: <input type="color" name="create_color_input" value={{$color->color}} />

@csrf
@method('put')
<button type="submit">CHANGE TO THIS</button>
</form>
</ul>
@endsection