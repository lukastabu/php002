@extends('mainexmp')
@section('content')
    <div class="srt-menu">
    <a class="srt-btn" href="{{ route('animal-index', ['sort' => 'asc']) }}">Sort Ascending</a>
    <a class="srt-btn" href="{{ route('animal-index', ['sort' => 'desc']) }}">Sort Descending</a>
    <a class="srt-btn" href="{{ route('animal-index') }}">Reset Sorting</a>
    </div>

    <ul>
        @forelse($animals as $animal)
            <li>
                <div class="spalvdeze" style="background-color: {{ $animal->takecolor->color }};">
                    <h3>{{ $animal->name }}</h3>
                    <span>{{ $animal->takecolor->name }}</span>
                    <span>{{ $animal->height }}</span>
                </div>
            </li>
            <a href="{{ route('animal-show', $animal->id) }}">Explore this animal!</a>
            <a href="{{ route('animal-edit', $animal) }}">Edit this animal!</a>
            <form class="trintukas" action="{{ route('animal-delete', $animal) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">REMOVE THIS</button>
            </form>

        @empty
            <li>Nothing to show :/</li>
        @endforelse
    </ul>
@endsection
