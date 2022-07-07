@extends('mainexmp')
@section('content')
<ul>
<form action="{{route('color-store')}}" method="POST">
<input type="color" name="create_color_input"/>
@csrf
<button type="submit">ADD THIS</button>
</form>
</ul>
@endsection