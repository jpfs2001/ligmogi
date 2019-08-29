@extends('layouts.nav')

@section('content')
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
            </div>
        </div>
    </div>
</div>      

<br><br>
    <div class="row">
        <div class="col-lg-6">
		
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
                        <td><h4>{{$dados->feriado_nacional == 0 ? '-' : $dados->feriado_nacional}}</h4></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <br><br>

        <div class="col-lg-6">
            <iframe width="100%" height="450px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$address}}&amp;zoom=16&amp;key=AIzaSyCjCHTUredoQH1u_K1J4OCs4ODp_hKQ0Zk" allowfullscreen=""></iframe>
        </div>
    

@stop