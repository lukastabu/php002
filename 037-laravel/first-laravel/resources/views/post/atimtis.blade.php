@if($ro !== '')
<h1> Rezultatas yra: {{$ro}}</h1>
@endif
<form action="{{route('skaiciuotuvas')}}" method="POST">
    X: <input type="text" name="x">
    Y: <input type="text" name="y">
@csrf
    <button type:"submit"> ATIMTI </button>
</form>

<ul>
@foreach ($colors as $color)
    <li>
    {{$color->id}}: {{$color->color}} 
    </li>
@endforeach
<ul>
