@extends('layouts.nav')

@section('content')
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
    <form method="post" action="/addEndereco" enctype="multipart/form-data">
    <div></div>
        {{ csrf_field() }}

        <input type="hidden" name = "comercios_id" value="{{$dados}}">

        <label>
        <div class="form-group">
        <label for="rua" class="Texto">Rua</label>
        <input type="text" class="Texto form-control" name = "rua" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="bairro" class="Texto"bairro>bairro</label>
        <input type="text" class="Texto form-control" name = "bairro" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="numero" class="Texto">numero</label>
        <input type="text" class="Texto form-control" name = "numero" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="cidade" class="Texto">cidade</label>
        <input type="text" class="Texto form-control" name = "cidade" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="cep" class="Texto">cep</label> 
        <input type="text" class="Texto form-control" name = "cep" autocomplete="">
        </div>

        <label>
        <div class="form-group">   
        <label for="complemento" class="Texto">complemento</label>
        <input type="text" class="Texto form-control" name = "complemento" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="latitude" class="Texto">latitude</label>
        <input type="text" class="Texto form-control" name = "latitude" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="longitude" class="Texto">longitude</label>
        <input type="text" class="Texto form-control" name = "longitude" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-success" style="background-color: greelight;border-color: greenlight;" >Enviar Garai</button>


    </form>
</div>
@stop