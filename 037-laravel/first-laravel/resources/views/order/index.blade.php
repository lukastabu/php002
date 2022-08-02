@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>All Orders</h2>
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
                                        <div class="col-5">Animal height: {{ $order->takeanimal->height }} cm</div>
                                    </div>
                                    <div class="col-5">Client ID: {{ $order->user_id }}</div>
                                    <div class="col-5">Client Name: {{ $order->orderUserName->name }}</div>
                                    <form class="" action="{{ route('order-status', $order) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <label>Order Status:</label>
                                        <select name="order_status_admin">
                                            @foreach ($statuses as $key => $status)
                                                <option value="{{ $key }}" @if($key == $order->status) selected @endif>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-outline-success col-5" type="submit">Change Status</button>
                                    </form>
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
