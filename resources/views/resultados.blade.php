@extends('layouts.nav')

@section('content')
<?php 
$count = count($dados);

?>

<br>
<h3>A sua pesquisa encontrou {{$count}} resultados</h3>
<br>
<div class="card">
    
</div>

@foreach($dados as $d)

<div class="col-md-4">
    <div class="card" style="width:92%;max-width:300px;">
    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>{{$d->nome}}</b></h4> 
        <p>Architect & Engineer</p> 
    </div>
    </div>
    </div>

    
@endforeach

</div>


@stop