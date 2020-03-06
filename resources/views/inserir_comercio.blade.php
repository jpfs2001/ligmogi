@extends('layouts.nav')

@section('content')
<h3><a href="/admin">/Admin</a></h3>
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

    <form method="post" action="/inserirComercio" enctype="multipart/form-data">
    
        {{ csrf_field() }}

        
        
        <div class="col-md-6">

            <label>
            <div class="form-group">   
            <label for="nome" class="Texto">Nome do comercio</label><br>
            <input type="text" class="Texto form-control" name= "nome" autocomplete="off">
            </div>

            <label>
            <div class="form-group">   
            <label for="telefone" class="Texto">Telefone</label> 
            <input type="text" class="Texto form-control" name="telefone" value="(19) ">&nbsp <input type="checkbox" name= "whats" value="1" autocomplete="off"> WhastApp 
            </div>

            <label>
            <div class="form-group">   
            <label for="atividade" class="Texto">Departamento</label>
            <input type="text" class="Texto form-control" name= "departamento" autocomplete="off">
            </div>

            <label>
            <div class="form-group">   
            <label for="atividade" class="Texto">Atividade</label>
            <input type="text" class="Texto form-control" name= "atividade" autocomplete="off">
            </div>

            <label>
            <div class="form-group">   
            <label for="facebook" class="Texto">Facebook</label>
            <input type="text" class="Texto form-control" name= "facebook" autocomplete="off" value="">
            </div>

            <label>
            <div class="form-group">   
            <label for="site" class="Texto">Site</label>
            <input type="text" class="Texto form-control" name= "site" autocomplete="off" value="">
            </div>

            

            <label>
            <div class="form-group">   
            <label for="capa" class="Texto">capa</label>
            <input type="text" class="Texto form-control" name= "capa" autocomplete="off" value="">
            </div>

            
            <div class="form-group">   
            <label for="banner" class="Texto">Banner</label>
            <input type="file" class="Texto form-control" name="banner">
            </div>
        </div>

        <div class="col-md-6">
        
  
            <label>
            <div class="form-group">
            <label for="email" class="Texto">Email</label>
            <input type="text" class="Texto form-control" name = "email" autocomplete="off">
            </div>

            <label>
            <div class="form-group">
            <label for="rua" class="Texto">Rua</label>
            <input type="text" class="Texto form-control" name = "rua" autocomplete="off">
            </div>
            <br>

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
            <input type="text" class="Texto form-control" name = "cidade" autocomplete="off" value="Mogi Mirim">
            </div>

            <label>
            <div class="form-group">   
            <label for="cep" class="Texto">cep</label> 
            <input type="text" class="Texto form-control" name = "cep" autocomplete="">
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

            <div class="form-group">
            <label for="icone" class="Texto">Icone</label>
            <input type="file" class="Texto form-control" name="icone" id="icone" autocomplete="off">
            </div><br>

        </div>

        
</div>

<div class="" align="Center">
        Segunda-Feira&nbsp 
        <input type="checkbox" name= "semana" value="1" autocomplete="off">Semana inteira
        <div class="form-inline">
        <label for="seg" class="Texto">Abre as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "seg1" autocomplete="off">&nbsp 
        <label for="" class="Texto">fecha as as</label>&nbsp 
        <input type="time" class="Texto form-control" name = "seg2" autocomplete="off">&nbsp 
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

<div align="center">
<button type="submit" class="btn btn-success" style="padding: 12px 28px;" >Enviar </button>
</div>
       
    
    </form>

@stop