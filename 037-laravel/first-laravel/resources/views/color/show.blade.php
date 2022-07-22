@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Color</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="spalvdeze" style="background-color: {{ $color->color }};">
                                    <h3>{{ $color->name }}</h3>
                                    <span>{{ $color->color }}</span>
                                </div>
                            </li>
                            @if(Auth::user()->role > 3 )
                            <a class="btn btn-outline-success" href="{{ route('color-edit', $color) }}">Edit this color</a>
                            <form class="trintukas" action="{{ route('color-delete', $color) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Remove it</button>
                            </form>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
