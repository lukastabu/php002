@extends('mainexmp')
@section('content')
    <ul>
        @forelse($colors as $color)
            <li>
                <div class="spalvdeze" style="background-color: {{ $color->color }};">
                    {{ $color->color }}
                </div>
            </li>
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

    <a href="{{ route('color-create') }}">Add a new color!</a>
@endsection
