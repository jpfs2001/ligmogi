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

    <form method="post" action="/editarComercios" enctype="multipart/form-data">
    
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{$dados->id}}">
        
        <div class="col-md-6">
        <label>
        <div class="form-group">   
        <label for="nome" class="Texto">Nome do comercio</label><br>
        <input type="text" class="Texto form-control" name= "nome" autocomplete="off" value="{{$dados->nome}}">
        </div>

        <label>
        <div class="fom-group">
        <label for="email" class="Texto">Email</label>
        <input type="text" class="Texto form-control" name= "email" autocomplete="off" value="{{$dados->email}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="site" class="Texto">Site</label>
        <input type="text" class="Texto form-control" name= "site" autocomplete="off" value="{{$dados->site}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="resumo" class="Texto">Resumo</label>
        <textarea type="text" class="Texto form-control" name= "resumo" autocomplete="off" >{{$dados->resumo}}</textarea>
        </div>

        <label>
        <div class="form-group">   
        <label for="facebook" class="Texto">Facebook</label>
        <input type="text" class="Texto form-control" name= "facebook" autocomplete="off" value="{{$dados->facebook}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="atividade" class="Texto">Atividade</label>
        <input type="text" class="Texto form-control" name= "atividade" autocomplete="off" value="{{$dados->atividade}}">
        </div>

        <label>
        <div class="form-group">   
        <label for="atividade" class="Texto">Departamento</label>
        <input type="text" class="Texto form-control" name= "departamento" autocomplete="off" value="{{$dados->departamento}}">
        </div>

        <label>
        
            <div class="form-group">   
            <label for="capa" class="Texto">capa</label>
            <input type="text" class="Texto form-control" name= "capa" autocomplete="off" value="{{$dados->capa}}">
            </div>

        <div class="form-group">   
        <label for="banner" class="Texto">Banner</label>
        <input type="file" class="Texto form-control" name="banner">
        </div>

        <div class="form-group">
        <label for="icone" class="Texto">Icone</label>
        <input type="file" class="Texto form-control" name="icone" id="icone" autocomplete="off">
        </div><br>

        <button type="submit" class="btn btn-success" style="background-color: greelight;border-color: greenlight;" >Enviar </button>
</div>

<div class="col-md-6">
        Segunda-Feira&nbsp 
        <div class="form-inline">
        <label for="seg" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "seg1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "seg2" autocomplete="off">&nbsp <input type="checkbox" name= "semana" value="1" autocomplete="off">Semana inteira
        </div><br>

        Terça-Feira&nbsp 
        <div class="form-inline">
        <label for="ter" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "ter1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "ter2" autocomplete="off">
        </div><br>

        Quarta-Feira&nbsp 
        <div class="form-inline">
        <label for="quar" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "qua1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "qua2" autocomplete="off">
        </div><br>

        Quinta-Feira&nbsp 
        <div class="form-inline">
        <label for="qui" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "qui1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "qui2" autocomplete="off">
        </div><br>

        Sexta-Feira&nbsp 
        <div class="form-inline">
        <label for="sex" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "sex1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "sex2" autocomplete="off">
        </div><br>

        Sabado&nbsp 
        <div class="form-inline">
        <label for="sab" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "sab1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "sab2" autocomplete="off">
        </div><br>

        Domingo&nbsp 
        <div class="form-inline">
        <label for="" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "dom1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "dom2" autocomplete="off">
        </div><br>

        Feriados&nbsp 
        <div class="form-inline">
        <label for="" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "feriado1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "feriado2" autocomplete="off">
        </div><br>

        Feriados Nacionais&nbsp 
        <div class="form-inline">
        <label for="" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "nacional1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "nacional2" autocomplete="off">
        </div><br>
</div>


        
       
    
    </form>

@stop