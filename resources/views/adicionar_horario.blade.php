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
    <form method="post" action="/addHorario" enctype="multipart/form-data">
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

        <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar Garai</button>


    </form>
</div>
</body>
</html>