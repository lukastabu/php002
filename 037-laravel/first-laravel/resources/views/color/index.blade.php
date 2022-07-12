@extends('mainexmp')
@section('content')
    <div class="srt-menu">
    <a class="srt-btn" href="{{ route('color-index', ['sort' => 'asc']) }}">Sort Ascending</a>
    <a class="srt-btn" href="{{ route('color-index', ['sort' => 'desc']) }}">Sort Descending</a>
    <a class="srt-btn" href="{{ route('color-index') }}">Reset Sorting</a>
    </div>

    <ul>
        @forelse($colors as $color)
            <li>
                <div class="spalvdeze" style="background-color: {{ $color->color }};">
                    <h3>{{ $color->name }}</h3>
                    <span>{{ $color->color }}</span>
                </div>
            </li>
            <a href="{{ route('color-show', $color->id) }}">Explore this color!</a>
            <a href="{{ route('color-edit', $color) }}">Edit this color!</a>
            <form class="trintukas" action="{{ route('color-delete', $color) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">REMOVE THIS</button>
            </form>

        @empty
            <li>Nothing to show :/</li>
        @endforelse
    </ul>
@endsection
