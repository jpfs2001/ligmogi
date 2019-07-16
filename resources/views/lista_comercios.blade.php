<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<thead>
    <tr>
        <th>Nome<th>
        <br>
    </tr>
</thead>

<tbody>

    @foreach($dados as $d)
    <tr>
        <td><a href="/comercios/informacoes/{{$d->id}}">{{$d->nome}}</td>
    </tr>
</tbody>
<br>
    @endforeach

</body>
</html>