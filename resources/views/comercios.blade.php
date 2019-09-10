@extends('layouts.nav')
<?php 

$count = 0;
$count2 = 0;
?>


@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/comercios.css') }}" >


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>

<div align="center"><h1 style="color:#b40404">{{$dados->nome}}</h1></div>
<br>

<div class="card ">
        <div class="row">
        
        <div class="col-lg-6">
            <img src="{{$dados->banner}}" width="100%">
            
            
            <div class="card-content">
                <h4 align="justify">{{$dados->resumo}}</h4>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card-content">
            @foreach($enderecos as $e)

                <h3><i class="fa fa-map-marker" style="color:#ff0000"></i>  {{$e->rua}}, {{$e->numero}} - {{$e->bairro}}</h3>
                <h3>{{$e->cep}}, {{$e->cidade}}</h3 >

            @endforeach

            @foreach($telefones as $t)

                <h3><i class="{{$t->whats == 1 ? 'fa fa-whatsapp' : 'fa fa-phone'}}"  style="color:#25d366"></i> {{$t->telefone}}</h3>
                
            @endforeach

                @if(isset($dados->email))

                    <h3><i class="fa fa-envelope-o" style="color:blue"></i> {{$dados->email}}</h3>

                @endif

                @if(isset($dados->site))

                    <h3><a href="{{$dados->site}}"> {{$dados->site}} </a></h3>

                @endif

                @if(isset($dados->facebook))
                    <a href="{{$dados->facebook}}"><i class="fa fa-facebook facebook"></i></a>
                @endif

            </div>
        </div>  
    </div>
</div>      

<br><br>
    <div class="row">
        <div class="col-lg-6">
		
		    <table class="table table-condensed table-hover" width="60%" cellspacing="0" data-toggle="bootgrid">
                <thead style="background-color:#b40404; color:#ffffff" >
                    <tr>
                        <div class="responsive">
                            <th><h3>Dia da semana</h3></th>
                            <th><h3>Horário</h3></th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>Segunda-Feira</h4></td>
                        <td><h4>{{$dados->seg == 0 ? '-' : $dados->seg}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Terça-Feira</h4></td>
                        <td><h4>{{$dados->ter == 0 ? '-' : $dados->ter}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Quarta-Feira</h4></td>
                        <td><h4>{{$dados->qua == 0 ? '-' : $dados->qua}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Quinta-Feira</h4></td>
                        <td><h4>{{$dados->qui == 0 ? '-' : $dados->qui}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Sexta-Feira</h4></td>
                        <td><h4>{{$dados->sex == 0 ? '-' : $dados->sex}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Sabado</h4></td>
                        <td><h4>{{$dados->sab == 0 ? '-' : $dados->sab}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Domingo</h4></td>
                        <td><h4>{{$dados->dom == 0 ? '-' : $dados->dom}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Feriados</h4></td>
                        <td><h4>{{$dados->feriado == 0 ? '-' : $dados->feriado}}</h4></td>
                    </tr>

                    <tr>
                        <td><h4>Feriados nacionais</h4></td>
                        <td><h4>{{$dados->feriado_nacional == 0 ? '-' : $dados->feriado_nacional}}</h4></td>
                    </tr>

                </tbody>
            </table>
        </div>
        

        <div class="col-lg-6">
            <iframe width="100%" height="450px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$address}}&amp;zoom=16&amp;key=AIzaSyCjCHTUredoQH1u_K1J4OCs4ODp_hKQ0Zk" allowfullscreen=""></iframe>
        </div>
    </div>
            <br>

            <script src="{{ URL::asset('js/comercios.js') }}"></script>

        <div class="row">

            <div class="col-lg-8">
                
            <section class="awSlider">
                <div  class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($images as $i)
                        
                            <li data-target=".carousel" data-slide-to="{{$count}}" class="{{$count == 0 ? 'active' : ''}}"></li>
                        
                        <?php 
                        
                            $count++;

                        ?>

                        @endforeach

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                    @foreach($images as $i)
                    <div class="item{{$count2 == 0 ? ' active' : ''}}">

                        <img src="{{$i->link}}" class="img" width="100%">
                        <div class="carousel-caption">Görsel #1</div>
                        <?php $count2++; ?>
                    </div>
                    @endforeach


                    </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Geri</span>
                    </a>
                    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">İleri</span>
                    </a>
                </div>
                </section>
                    


            </div>

        @if(isset($dados->facebook))
            <div class="col-lg-4"> 
                <div class="fb-page" data-href="{{$dados->facebook}}" data-tabs="timeline" data-width="" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$dados->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$dados->facebook}}"></a></blockquote></div>
            </div>
        @endif
        </div>
@stop