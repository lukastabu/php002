@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Animal</div>

                    <div class="card-body list-group">
                        <form action="{{ route('animal-store') }}" method="POST">
                            <li class="list-group-item">Animal Name: <input type="text" name="create_animal_name" /></li>
                            <li class="list-group-item">Animal Height: <input type="number" name="create_animal_height" />
                            </li>
                                <li class="list-group-item">Animal Color:
                                    <select name="create_color_id">
                                        @foreach ($colors as $color)
                                            <option value="{{ $color->id }}" style="background-color: {{ $color->color }};">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                            <div id='magic_color' style="background-color: {{ $color->first()->color }}"><a id='magic_link' href="{{route('color-show', $colors->first()->id)}}">This is how <span>{{$colors->first()->name}}</span> looks</a></div>
                                </li>
                            @csrf
                            <button class="btn btn-outline-success" type="submit">Add Animal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
const showUrl = "{{route('color-show-routing')}}";

const selector = document.querySelector('[name=create_color_id]');
const magicColor = document.querySelector('#magic_color');
const magicLink = document.querySelector('#magic_link');
const linkText = magicLink.querySelector('span');

selector.addEventListener('change', e => {
    {{-- magicColor.setAttribute('style=background-color:', showUrl + '/' + e.target.value); --}}
    magicLink.setAttribute('href', showUrl + '/' + e.target.value);    
    linkText.innerText = selector.options[selector.selectedIndex].text;    
})

console.log(showUrl, selector);

</script>
@endsection
