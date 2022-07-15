@extends('mainexmp')
@section('content')
    <ul>
    <li>
    <div class="spalvdeze" style="background-color: {{ $animal->takecolor->color }};">
        <h3>{{ $animal->name }}</h3>
        <span>{{ $animal->takecolor->name }}</span>
        <span>{{ $animal->height }}</span>
    </div>
    </li>
    <a href="{{ route('animal-edit', $animal) }}">Edit this Animal!</a>
    <form class="trintukas" action="{{ route('animal-delete', $animal) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">REMOVE THIS</button>
    </form>
    </ul>
@endsection
