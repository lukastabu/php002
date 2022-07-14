@extends('mainexmp')
@section('content')
    <ul>
    <li>
    <div class="spalvdeze" style="background-color: {{ $color->color }};">
        <h3>{{ $color->name }}</h3>
        <span>{{ $color->color }}</span>
    </div>
    </li>
    <a href="{{ route('color-edit', $color) }}">Edit this color!</a>
    <form class="trintukas" action="{{ route('color-delete', $color) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">REMOVE THIS</button>
    </form>
    </ul>
@endsection
