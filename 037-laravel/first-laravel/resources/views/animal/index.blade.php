@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Animals</div>

                    <div class="card-body">
                        <div class="srt-menu">
                            <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index', ['sort' => 'asc']) }}">Sort Ascending</a>
                            <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index', ['sort' => 'desc']) }}">Sort Descending</a>
                            <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index') }}">Reset Sorting</a>
                        </div>

                        <ul class="list-group">
                            @forelse($animals as $animal)
                                <li class="list-group-item">
                                    <div class="spalvdeze" style="background-color: {{ $animal->takecolor->color }};">
                                        <h3>{{ $animal->name }}</h3>
                                        <span>{{ $animal->takecolor->name }}</span>
                                        <span>{{ $animal->height }}</span>
                                    </div>
                                </li>
                                <a class="btn btn-outline-primary" href="{{ route('animal-show', $animal->id) }}">Explore this animal!</a>
                                <a class="btn btn-outline-success" href="{{ route('animal-edit', $animal) }}">Edit this animal!</a>
                                <form class="trintukas" action="{{ route('animal-delete', $animal) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">REMOVE THIS</button>
                                </form>

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
