@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Color</div>

                    <div class="card-body">
                        <form action="{{ route('color-store') }}" method="POST">
                            Name of Color: <input type="text" name="create_color_name" />
                            Color: <input type="color" name="create_color_input" />
                            @csrf
                            <button class="btn btn-outline-success" type="submit">ADD THIS</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
