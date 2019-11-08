@extends('layouts.nav')

@section('seo')
<title>Liguemogi - O guia comercial da região de Mogi Mirim</title>
<meta name="description" content="Liguemogi é o guia comercial ideal para você que procura o contado de algum prestador de serviços na região de Mogi Mirim" />
<meta name="keywords" content="Ligmogi, Liguemogi, Mogi, Mirim, Guia, Empresas, Lista, Telefonia">
<meta name="robots" content="index, follow">
<meta name='googlebot' content='index, follow'>
@stop

@section('content')
<?php 
$count = 0;
?>



  <div align="center" style="color:#b40404"><h1>Comércios em destaque</h1></div>
  <br><br>

  <div class="row multi-slider">
    <div class="col-md-12 col-lg-12 ">
      <div class="carousel carousel-showmanymoveone slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          
            @foreach($dados as $d)
            <div class="item{{$count == 0 ? ' active' : '' }}">
            <?php 
            $nomee = str_replace(' ', '-', $d->nome);
            ?>
                <div class="col-xs-12 col-sm-4 col-md-4">
                
                <a href="/Detalhes/Destaques/{{$d->id}}/{{$nomee}}"><h1 class="h1-destaque">{{$d->nome}}</h1><img src="{{$d->banner}}" class="img-responsive" alt="{{$d->nome}}"></a></div> <?php $count++;?> 

            </div>
            @endforeach
        </div>

        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    
                    </a>
                    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    
          </a>
       
      </div>
    </div>
  </div>

    
  
  

  
 

@stop