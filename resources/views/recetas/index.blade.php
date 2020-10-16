<h1>Recetas</h1>

@foreach($recetas as $r)
    <li> {{$r}}</li>
@endforeach
<br>
<h2>Categorias</h2>
@foreach ($categorias as $c)
    <li>{{$c}}</li>
@endforeach
