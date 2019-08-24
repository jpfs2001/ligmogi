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
    <form method="post" action="/inserirComercio" enctype="multipart/form-data">
    <div></div>
        {{ csrf_field() }}

        <label>
        <div class="form-group">   
        <label for="nome" class="Texto">Nome do comercio</label><br>
        <input type="text" class="Texto form-control" name= "nome" autocomplete="off">
        </div>


        <div class="fom-group">
        <label for="email" class="Texto">Email</label>
        <input type="text" class="Texto form-control" name= "email" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        
        </div>

        <label>
        <div class="form-group">   
        <label for="site" class="Texto">Site</label>
        <input type="text" class="Texto form-control" name= "site" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="resumo" class="Texto">Resumo</label>
        <input type="text" class="Texto form-control" name= "resumo" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="telefone" class="Texto">Telefone</label> 
        <input type="text" class="Texto form-control" name="telefone">&nbsp <input type="checkbox" name= "whats" value="1" autocomplete="off"> WhastApp 
        </div>

        <label>
        <div class="form-group">   
        <label for="facebook" class="Texto">Facebook</label>
        <input type="text" class="Texto form-control" name= "facebook" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="atividade" class="Texto">Atividade</label>
        <input type="text" class="Texto form-control" name= "atividade" autocomplete="off">
        </div>

        <label>
        <div class="form-group">
        Capa <input type="radio" name= "capa" value="1">Sim
        <input type="radio" name= "capa" value="0" checked>Não
        </div>

        <div class="form-group">   
        <label for="banner" class="Texto">Banner</label>
        <input type="file" class="Texto form-control" name="banner">
        </div>

        <div class="form-group">
        <label for="icone" class="Texto">Icone</label>
        <input type="file" class="Texto form-control" name="icone" id="icone" autocomplete="off">
        </div><br>

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


        <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar Garai</button>


    </form>
</div>
@stop