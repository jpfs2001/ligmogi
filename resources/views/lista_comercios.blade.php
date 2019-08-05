@extends('layouts.nav')

@section('content')<!DOCTYPE html>

<br><br>
        

        <div class="col-sm-10">
		<div class="well clearfix">
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>
		<th>NOME DO COMERCIO</th>
		<th>editar</th>
		</tr>
		</thead>
    </div>
<tbody>
    @foreach($dados as $d)
    <tr>
        <td><a href="/comercios/informacoes/{{$d->id}}">{{$d->nome}}</a></td>

        <form method="post" action="/editar/comercios/{{$d->id}}">
        {{csrf_field()}}
        <td><button type="submit"><i class="fa fa-edit"></i></button></td>
        </form>
    </tr>
    @endforeach

</tbody>
</table>
<br>
   

@stop