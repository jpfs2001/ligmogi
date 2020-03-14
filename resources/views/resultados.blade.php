@extends('layouts.nav')

@section('content')
<?php 
$count = count($dados);

?>

<br>
<h2 style="color:#b40404">Exibindo {{$count}} resultados</h3>
<br>


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
    
    <a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"><h1 class="h1-destaque">Clique na imagem para ver mais</h1></a><a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"> <img src="{{$d->banner}}" alt="Avatar" style="width:100%"></a>
    @endif
    <div class="cardi">
    <a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"><h4>{{$d->nome}}</h4></a> 
        <p>{{$d->rua}}, {{$d->numero}} - {{$d->bairro}}</p>

        <?php  
            
            $tel = str_replace('(','', $d->telefone);
            $tel = str_replace(')','', $tel);
            $tel = str_replace('-','', $tel);
            $tel = str_replace(' ','', $tel);
            
            ?>
        <p><a href="{{$d->whats == 1 ? 'https://wa.me/55' : 'tel:'}}{{$tel}}" target="_blank"><i class="{{$d->whats == 1 ? 'fa fa-whatsapp' : 'fa fa-phone'}}" style="color:#25d366;font-size:18px"></i> {{$d->telefone}}</a></p>
        </div>
      </div>
    
    <br><br>
    </div>

    
@endforeach

</div>

   <div align="center"> {!! $dados->links() !!}</div> 

@stop