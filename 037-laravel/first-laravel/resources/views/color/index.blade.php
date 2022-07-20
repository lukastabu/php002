@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Colors</div>

                    <div class="card-body">
                        <div class="srt-menu">
                            <a class="srt-btn btn btn-outline-info" href="{{ route('color-index', ['sort' => 'asc']) }}">Sort Ascending</a>
                            <a class="srt-btn btn btn-outline-info" href="{{ route('color-index', ['sort' => 'desc']) }}">Sort Descending</a>
                            <a class="srt-btn btn btn-outline-info" href="{{ route('color-index') }}">Reset Sorting</a>
                        </div>

                        <ul class="list-group">
                            @forelse($colors as $color)
                                <li class="list-group-item">
                                    <div class="spalvdeze" style="background-color: {{ $color->color }};">
                                        <h3>{{ $color->name }}</h3>
                                        <span>{{ $color->color }}</span>
                                    </div>
                                </li>
                                <a class="btn btn-outline-primary" href="{{ route('color-show', $color->id) }}">Explore this color!</a>
                                @if(Auth::user()->role > 3 )
                                <a class="btn btn-outline-success" href="{{ route('color-edit', $color) }}">Edit this color!</a>
                                <form class="trintukas" action="{{ route('color-delete', $color) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">REMOVE THIS</button>
                                </form>
                                @endif

                            @empty
                                <li class="list-group-item">Nothing to show :/</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
