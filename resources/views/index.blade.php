@extends('layouts.nav')

@section('content')
<?php ?>



  <h2>Comércios em destaque</h2>
  <br><br>
  <div class="row">
    <div class="col-md-18">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          
          <div class="item active">
            <div class="col-xs-4"><a href="#1"><img src="https://s3-sa-east-1.amazonaws.com/fonito.images/ligmogi/10095-ban-l.png" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="https://s3-sa-east-1.amazonaws.com/fonito.images/ligmogi/10095-ban-l.png" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="https://s3-sa-east-1.amazonaws.com/fonito.images/ligmogi/10783-ban-l.png" class="img-responsive"></a></div>
          </div>
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>


@stop