@extends('layouts.nav')

@section('content')

    <center>
    <font size="7px"
    <p><a href="/adicionar/telefone/{{$dados->id}}">Adicionar telefone</a></p>
    <p><a href="/adicionar/endereco/{{$dados->id}}">Adicionar endereço</a></p>
    <br><br><br>
    </font>
    </center>

    <div class="col-md-7">
    <font size="5px">INFORMAÇÕES</font>
      
      <p>Nome: {{$dados->nome}}</p>
      <p>Email: {{$dados->email}}</p>
      <p>site: {{$dados->site}}</p>
      <p>resumo: {{$dados->resumo}}</p>
      <p>Facebook: {{$dados->facebook}}</p>
      <p>Atividade: {{$dados->atividades}}</p>
      <p>Capa: {{$dados->capa == 1 ? 'sim' : 'não'}}</p>

    </div>

    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0  animated fadeInRight" src="{{ $dados->banner }}" >
    </div>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $dados->icone }}" >
    </div>
    <font size="5px">TELEFONE</font>
    @foreach ($telefones as $t)

    <div class="">

    {{$t->telefone}} &nbsp <i class="fa"></i>

    </div>

    @endforeach 
    <br>

    <font size="5px">ENDEREÇOS</font>

    @foreach ($enderecos as $e)

    <div class="">
    {{$e->rua}}
    </div>

    <div class="">
    {{$e->bairro}}
    </div>

    <div class="">
    {{$e->numero}}
    </div>

    <div class="">
    {{$e->cidade}}
    </div>

    <div class="">
    {{$e->cep}}
    </div>

    <div class="">
    {{$e->complemento}}
    </div>
    <br>
      
    @endforeach


      @stop