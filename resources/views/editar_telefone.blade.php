@extends('layouts.nav')

@section('content')
<body>


    
<div class="container">
    <form method="post" action="/editarTelefone" enctype="multipart/form-data">
    <div></div>
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{$dados->id}}"

        <div class="form-group">   
        <label for="telefone" class="Texto">Telefone</label> 
        <input type="text" class="Texto form-control" name="telefone" value="{{$dados->telefone}}"><input type="checkbox" name= "whats" value="1" autocomplete="off"> WhastApp 
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar</button>


@stop