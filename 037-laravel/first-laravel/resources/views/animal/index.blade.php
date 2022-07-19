@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>All Animals</h2>
                        <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index', ['sort' => 'asc']) }}">Sort
                            Ascending</a>
                        <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index', ['sort' => 'desc']) }}">Sort
                            Descending</a>
                        <a class="srt-btn btn btn-outline-info" href="{{ route('animal-index') }}">Reset Sorting</a>
                    </div>

                    <div class="card-body">

                        <ul class="list-group">
                            @forelse($animals as $animal)
                                <li class="list-group-item">
                                    <div class="spalvdeze" >
                                    <div class="col-7" style="background-color: {{ $animal->takecolor->color }};">
                                        <h3>{{ $animal->name }}</h3>
                                        <span>{{ $animal->takecolor->name }}</span>
                                    </div>
                                        <div class="col-5">Animal height: {{ $animal->height }} cm</div>
                                    </div>
                                </li>
                                <div class="act-menu">
                                <a class="btn btn-outline-primary mr-1" href="{{ route('animal-show', $animal->id) }}">Explore
                                    this animal!</a>
                                <a class="btn btn-outline-success m-1" href="{{ route('animal-edit', $animal) }}">Edit this
                                    animal!</a>
                                <form class="trintukas" action="{{ route('animal-delete', $animal) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger ml-1" type="submit">Remove this</button>
                                </form>
                                </div>

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
