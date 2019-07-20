<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p><a href="/adicionar/telefone/{{$dados->id}}">Adicionar telefone</a></p>
    <p><a href="/adicionar/endereco/{{$dados->id}}">Adicionar endereço</a></p>
    <p><a href="/adicionar/horario/{{$dados->id}}">Adicionar horario de funcionamento</a></p>
    <br><br><br>

    <p>Nome: {{$dados->nome}}</p>
    <p>Email: {{$dados->email}}</p>
    <p>site: {{$dados->site}}</p>
    <p>resumo: {{$dados->resumo}}</p>
    <p>Facebook: {{$dados->facebook}}</p>
    <p>Atividade: {{$dados->atividades}}</p>
    <p>Capa: {{$dados->capa == 1 ? 'sim' : 'não'}}</p>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0  animated fadeInRight" src="{{ $dados->banner }}" >
    </div>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $dados->icone }}" >
    </div>

    <button type="submit" class="btn btn-primary" style="background-color: greelight;border-color: greenlight;" >Enviar Garai</button>


</body>
</html>