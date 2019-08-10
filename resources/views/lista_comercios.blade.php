@extends('layouts.nav')

@section('content')<!DOCTYPE html>

<br><br>
        

        <div class="col-sm-10">
		
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>
		<th>NOME DO COMERCIO</th>
		<th>editar</th>
        <th>deletar</th>
		</tr>
		</thead>
    
<tbody>
    @foreach($dados as $d)
    <tr>
        <td><a href="/comercios/informacoes/{{$d->id}}">{{$d->nome}}</a></td>

        <form method="post" action="/editar/comercios/{{$d->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-info"><i class="fa fa-edit"></i></button></td>
        </form>

        <form method="post" action="/deletar/comercios/{{$d->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="fa fa-trash"></i></button></td>
        </form>
    </tr>
    @endforeach

</tbody>
</table>
<br>
   

@stop