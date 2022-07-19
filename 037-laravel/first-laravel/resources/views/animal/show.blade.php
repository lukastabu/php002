@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Animal</div>

                    <div class="card-body">
                        <div class="spalvdeze" style="background-color: {{ $animal->takecolor->color }};">
                            <h3>{{ $animal->name }}</h3>
                            <span>{{ $animal->takecolor->name }}</span>
                            <span>{{ $animal->height }}</span>
                        </div>
                        <a class="btn btn-outline-success" href="{{ route('animal-edit', $animal) }}">Edit this Animal!</a>
                        <form class="trintukas" action="{{ route('animal-delete', $animal) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" type="submit">REMOVE THIS</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
