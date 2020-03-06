@extends('layouts.nav')

@section('content')

<br>
<h3><a href="/admin">/Admin</a></h3>
<br>
        
    
        <div class="col-sm-10">

            <div align="right">
                <form action="/pesquisar/lista" method="get">
                    {{csrf_field()}}
                    <label for="busca">Buscar</label>
                    <input type="search" name="nome">
                    <button type="submit" class="btn btn-success">OK</button>
                </form>
            </div>
            <br>
		
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
		<thead>
            <tr>
                <th>NOME DO COMERCIO</th>
                <th>editar</th>
                <th>deletar</th>
                <th>duplicar</th>
            </tr>
		</thead>
    
        <tbody>
            @foreach($dados as $d)
            <tr>
                <td><a href="/comercios/informacoes/{{$d->id}}">{{$d->nome}}</a></td>

                <form method="get" action="/editar/comercios/{{$d->id}}">
                    {{csrf_field()}}
                    <td><button type="submit" class="btn btn-info"><i class="fa fa-edit"></i></button></td>
                </form>

                <form method="post" action="/deletar/comercios/{{$d->id}}">
                    {{csrf_field()}}
                    <td><button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="fa fa-trash"></i></button></td>
                </form>

                <form method="post" action="/duplicar/comercios/{{$d->id}}">
                    {{csrf_field()}}
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-clone"></i></button></td>
                </form>
            </tr>
            @endforeach

        </tbody>
    </table>
<br>


    <div align="center"> {!! $dados->links() !!}</div> 
   

@stop