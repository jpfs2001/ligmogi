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

<div class="col-lg-4">
    <div class="card" style="width:92%;max-width:300px;">
    @if(isset($d->banner))
    <a href="/comercios/{{$d->id}}"> <img src="{{$d->banner}}" alt="Avatar" style="width:100%"></a>
    @endif
    <div class="container">
    <a href="/comercios/{{$d->id}}"><h4><b>{{$d->nome}}</b></h4></a> 
        <p>{{$d->rua}}, {{$d->numero}} - {{$d->bairro}}</p>
        <p><i class="{{$d->whats == 1 ? 'fa fa-whatsapp' : 'fa fa-phone'}}" style="color:#25d366;font-size:18px"></i> {{$d->telefone}}</p>
    </div>
    </div>
    <br><br>
    </div>

    
@endforeach

</div>


@stop