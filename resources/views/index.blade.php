@extends('layouts.nav')

@section('content')
<?php 
$count = 0;
?>



  <div align="center" style="color:#b40404"><h1 clas="font-family:Roboto">Comércios em destaque</h1></div>
  <br><br>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-carousel-item" id="theCarousel" data-ride="carousel"> 
        <div class="carousel-inner">
          
        @foreach($dados as $d)
          <div class="item{{$count == 0 ? ' active' : '' }}">
            <div class="col-xs-4"><a href="/comercios/{{$d->id}}"><img src="{{$d->banner}}}" class="img" width="100%"></a></div> <?php $count++;?>
          </div>
        @endforeach
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>


  
 

@stop