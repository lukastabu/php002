@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>My Orders</h2>
                    </div>
                    {{-- @include('front.box') --}}

                    <div class="card-body">

                        <ul class="list-group">
                            @forelse($orders as $order)
                                <li class="list-group-item">
                                    <div class="spalvdeze">
                                        <div class="col-7"
                                            style="background-color: {{ $order->takeanimal->takecolor->color }};">
                                            <h3>{{ $order->takeanimal->name }}: <small>{{ $order->count }} units</small>
                                            </h3>
                                            <span>{{ $order->takeanimal->takecolor->name }}</span>
                                        </div>
                                        <div class="col-5">
                                            <span>Animal height: {{ $order->takeanimal->height }} cm</span>
                                            <span>Order Status: {{ $statuses[$order->status] }}</span>
                                        </div>
                                    </div>
                                </li>

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
