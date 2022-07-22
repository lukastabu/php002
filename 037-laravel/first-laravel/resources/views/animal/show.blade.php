@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Animal</div>

                    <div class="card-body">
                        <div class="spalvdeze list-group-item">
                            <div class="col-7" style="background-color: {{ $animal->takecolor->color }};">
                                <h3>{{ $animal->name }}</h3>
                                <span>{{ $animal->takecolor->name }}</span>
                            </div>
                            <div class="col-5">Animal height: {{ $animal->height }} cm</div>
                        </div>
                        @if (Auth::user()->role > 3)
                            <div class="act-menu">
                                <a class="btn btn-outline-success m-1" href="{{ route('animal-edit', $animal) }}">Edit this
                                    Animal</a>
                                <form action="{{ route('animal-delete', $animal) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger m-1" type="submit">Remove it</button>
                                </form>
                            </div>
                        @endif
                        <form class="krepselis" action="{{ route('animal-delete', $animal) }}" method="POST">
                            @csrf
                            @method('post')
                            <button class="btn btn-outline-warning ml-1" type="submit">Cart this</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
