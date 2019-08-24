@extends('layouts.nav')

@section('content')

@foreach($dados as $d)

    <p>{{$d->nome}}</p><br>

@endforeach


@stop