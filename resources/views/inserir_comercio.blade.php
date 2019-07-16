<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>Document</title>
</head>
<body>
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
        <label for="nome" class="Texto">Nome do comercio</label>
        <input type="text" class="Texto form-control" name= "nome" autocomplete="off">
        </div>

        <label>
        <div class="form-group">   
        <label for="email" class="Texto">Email</label>
        <input type="text" class="Texto form-control" name= "email" autocomplete="off">
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
        <input type="text" class="Texto form-control" name="telefone"><input type="checkbox" name= "whats" value="1" autocomplete="off"> WhastApp 
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
        </div>


        <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar Garai</button>


    </form>
</div>
</body>
</html>