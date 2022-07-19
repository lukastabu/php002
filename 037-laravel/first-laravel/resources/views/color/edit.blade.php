@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change Color</div>

                    <div class="card-body">
                        <form action="{{ route('color-update', $color) }}" method="POST">
                            Name of Color: <input type="text" name="create_color_name" value={{ $color->name }} />
                            Color: <input type="color" name="create_color_input" value={{ $color->color }} />

                            @csrf
                            @method('put')
                            <button class="btn btn-outline-success" type="submit">CHANGE TO THIS</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
