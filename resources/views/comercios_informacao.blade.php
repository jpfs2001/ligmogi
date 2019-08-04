@extends('layouts.nav')

@section('content')

    <p><a href="/adicionar/telefone/{{$dados->id}}">Adicionar telefone</a></p>
    <p><a href="/adicionar/endereco/{{$dados->id}}">Adicionar endereço</a></p>
    <br><br><br>

    <p>Nome: {{$dados->nome}}</p>
    <p>Email: {{$dados->email}}</p>
    <p>site: {{$dados->site}}</p>
    <p>resumo: {{$dados->resumo}}</p>
    <p>Facebook: {{$dados->facebook}}</p>
    <p>Atividade: {{$dados->atividades}}</p>
    <p>Capa: {{$dados->capa == 1 ? 'sim' : 'não'}}</p>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0  animated fadeInRight" src="{{ $dados->banner }}" >
    </div>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $dados->icone }}" >
    </div>

@stop