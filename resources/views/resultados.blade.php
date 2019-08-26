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
    @if(isset($d->banner))
    <img src="{{$d->banner}}" alt="Avatar" style="width:100%">
    @endif
    <div class="container">
        <h4><b>{{$d->nome}}</b></h4> 
        <p>{{$d->rua}}, {{$d->numero}} - {{$d->bairro}}</p> 
    </div>
    </div>
    <br><br>
    </div>

    
@endforeach

</div>


@stop