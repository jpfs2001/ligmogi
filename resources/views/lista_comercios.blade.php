@extends('layouts.nav')

@section('content')<!DOCTYPE html>


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

@stop