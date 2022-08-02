@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>All Animals</h2>
                    </div>
                    @include('front.box')

                    <div class="card-body">

                        <ul class="list-group">
                            @forelse($animals as $animal)
                                <li class="list-group-item">
                                    <div class="spalvdeze" >
                                    <div class="col-7" style="background-color: {{ $animal->color }};">
                                        <h3>{{ $animal->name }}</h3>
                                        <span>{{ $animal->colorName }}</span>
                                    </div>
                                        <div class="col-5">Animal height: {{ $animal->height }} cm</div>
                                    </div>
                                </li>
                                <div class="act-menu">
                                <a class="btn btn-outline-primary mr-1" href="{{ route('animal-show', $animal->id) }}">Explore this animal!</a>
                                {{-- @if(Auth::user()->role > 3 )
                                <a class="btn btn-outline-success m-1" href="{{ route('animal-edit', $animal) }}">Edit this animal!</a>
                                <form class="trintukas" action="" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger ml-1" type="submit">Remove this</button>
                                </form>
                                @endif --}}
                                @if(Auth::user()?->role>0)
                                <form class="krepselis" action="{{ route('order-add') }}" method="POST">
                                    <input type="" name="animal_id" value={{ $animal->id }} hidden/>
                                    <input type="" name="count" value=1 hidden/>
                                    @csrf
                                    <button class="btn btn-outline-warning ml-1" type="submit">Order this</button>
                                </form>
                                @endif
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
