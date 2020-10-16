<h1>Desde nosotros.blade.php</h1>


<!-- {{ 1 + 1}} -->

@php
    $variable = 20;
@endphp

@if($variable === 20)
    <h1>esto es una condicion correcta</h1>
@endif

{{$variable}}
