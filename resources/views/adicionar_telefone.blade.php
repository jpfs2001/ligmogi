@extends('layouts.nav')

@section('content')
<body>


    
<div class="container">
    <form method="post" action="/addTelefone" enctype="multipart/form-data">
    <div></div>
        {{ csrf_field() }}

        <input type="hidden" value="{{$dados}}" name="comercios_id">
        <div class="form-group">   
        <label for="telefone" class="Texto">Telefone</label> 
        <input type="text" class="Texto form-control" name="telefone"><input type="checkbox" name= "whats" value="1" autocomplete="off"> WhastApp 
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar</button>


@stop