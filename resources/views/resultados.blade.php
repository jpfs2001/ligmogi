@extends('layouts.nav')

@section('content')
<?php 
$count = count($dados);

?>

<br>
<h2 style="color:#b40404">Exibindo {{$count}} resultados</h3>
<br>
<div class="card">
    
</div>

@foreach($dados as $d)

<div class="col-lg-4">

        <?php 
          $nomee = str_replace(' ', '-', $d->nome);
        ?>

    <div class="card" style="width:92%;max-width:300px;">
    @if(isset($d->banner))
    <?php 
          $nomee = str_replace(' ', '-', $d->nome);
    ?>
    <a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"> <img src="{{$d->banner}}" alt="Avatar" style="width:100%"></a>
    @endif
    <div class="container">
    <a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"><h4><b>{{$d->nome}}</b></h4></a> 
        <p>{{$d->rua}}, {{$d->numero}} - {{$d->bairro}}</p>
        <p><i class="{{$d->whats == 1 ? 'fa fa-whatsapp' : 'fa fa-phone'}}" style="color:#25d366;font-size:18px"></i> {{$d->telefone}}</p>
    </div>
    </div>
    <br><br>
    </div>

    
@endforeach

</div>

   <div align="center"> {!! $dados->links() !!}</div> 

@stop