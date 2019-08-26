@extends('layouts.nav')

@section('content')

<h1>{{$dados->nome}}</h1>
<br>
<div class="col-md-6">
    <img src="{{$dados->banner}}" width="100%">
    <br><br>
    <p>{{$dados->resumo}}</p>

@stop