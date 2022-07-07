@extends('mainexmp')
@section('content')
<ul>
<form action="{{route('color-update', $color)}}" method="POST">
<input type="color" name="create_color_input" value={{$color->color}} />
@csrf
@method('put')
<button type="submit">CHANGE TO THIS</button>
</form>
</ul>
@endsection