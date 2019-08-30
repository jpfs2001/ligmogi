@extends('layouts.nav')

@section('content')
<h3><a href="/admin">/Admin</a><a href="/lista/comercios">/Comercios</a></h3>
<div class="panel-body">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
             <li>{{$error}}</li>  
            @endforeach          
            </ul>
        </div>
        @endif



<br><br><br><br>
<div class="container">
    <form method="post" action="/editarEnderecos" enctype="multipart/form-data">
    <div></div>
        {{ csrf_field() }}

        <input type="hidden" name = "id" value="{{$dados->id}}">

        <label>
        <div class="form-group">
        <label for="rua" class="Texto">Rua</label>
        <input type="text" class="Texto form-control" name = "rua" autocomplete="off" value="{{$dados->rua}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="bairro" class="Texto"bairro>bairro</label>
        <input type="text" class="Texto form-control" name = "bairro" autocomplete="off" value="{{$dados->bairro}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="numero" class="Texto">numero</label>
        <input type="text" class="Texto form-control" name = "numero" autocomplete="off" value="{{$dados->numero}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="cidade" class="Texto">cidade</label>
        <input type="text" class="Texto form-control" name = "cidade" autocomplete="off" value="{{$dados->cidade}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="cep" class="Texto">cep</label> 
        <input type="text" class="Texto form-control" name = "cep" autocomplete="off" value="{{$dados->cep}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="complemento" class="Texto">complemento</label>
        <input type="text" class="Texto form-control" name = "complemento" autocomplete="off" value="{{$dados->complemento}}">
        </div>
        <label>
        <div class="form-group">   
        <label for="latitude" class="Texto">latitude</label>
        <input type="text" class="Texto form-control" name = "latitude" autocomplete="off" value="{{$dados->latitude}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="longitude" class="Texto">longitude</label>
        <input type="text" class="Texto form-control" name = "longitude" autocomplete="off" value="{{$dados->longitude}}">
        </div>

        <button type="submit" class="btn btn-success" style="background-color: greelight;border-color: greenlight;" >Enviar</button>


    </form>
</div>
@stop