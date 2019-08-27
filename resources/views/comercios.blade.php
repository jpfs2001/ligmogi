@extends('layouts.nav')

@section('content')
<div align="center"><h1 >{{$dados->nome}}</h1></div>
<br>
<div class="col-md-6">

    <img src="{{$dados->banner}}" width="100%">
    <br>
    <h4 align="justify">{{$dados->resumo}}</h4>

    <div class="resp-container">
        <div class="resp-iframe mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$address}}=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">best wordpress themes</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
    </div>
</div>
<div class="col-md-6">
    @foreach($enderecos as $e)

        <h3><i class="fa fa-map-marker"></i>  {{$e->rua}}, {{$e->numero}} - {{$e->bairro}}</h3>
        <h3>{{$e->cep}}, {{$e->cidade}}</h3 >

    @endforeach

    @foreach($telefones as $t)

        <h3><i class="{{$t->whats == 1 ? 'fa fa-whatsapp' : 'fa fa-phone'}}"></i> {{$t->telefone}}</h3>
        
    @endforeach

        @if(isset($dados->email))

        <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$dados->email}}</h3>

        @endif

        @if(isset($dados->site))

        <h3><a href="{{$dados->site}}"> {{$dados->site}} </a></h3>

        @endif
        
        <div class="col-sm-10">
		
		    <table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
                <thead>
                    <tr>
                        <th><h3>Dia da Semana</h3></th>
                        <th><h3>Horario<h3></th>
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
                        <td><h4>{{$dados->feriado_nacionais == 0 ? '-' : $dados->feriado_nacionais}}</h4></td>
                    </tr>

                </tbody>
            </table>
<br>



</div>


        
    

@stop