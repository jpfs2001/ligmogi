@extends('layouts.nav')

@section('content')

    <center>
    <font size="7px"
    <p><a href="/adicionar/telefone/{{$dados->id}}">Adicionar telefone</a></p>
    <p><a href="/adicionar/endereco/{{$dados->id}}">Adicionar endereço</a></p>
    <br><br><br>
    </font>
    </center>

    <div class="col-md-7">
    <font size="5px">INFORMAÇÕES</font>
      
      <p>Nome: {{$dados->nome}}</p>
      <p>Email: {{$dados->email}}</p>
      <p>site: {{$dados->site}}</p>
      <p>resumo: {{$dados->resumo}}</p>
      <p>Facebook: {{$dados->facebook}}</p>
      <p>Atividade: {{$dados->atividades}}</p>
      <p>Capa: {{$dados->capa == 1 ? 'sim' : 'não'}}</p>

    </div>

    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0  animated fadeInRight" src="{{ $dados->banner }}" >
    </div>
    <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $dados->icone }}" >
    </div>
    <font size="5px">TELEFONE</font>
    <div class="col-sm-3">
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>  
		<th>Telefone</th>
		<th>editar</th>
    <th>deletar</th>
		</tr>
		</thead>
    </div>
<tbody>
      @foreach ($telefones as $t)
    <tr>
        <td>{{$t->telefone}}</a></td>

        <form method="post" action="/editar/telefones/{{$t->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-info"><i class="fa fa-edit"></i></button></td>
        </form>

        <form method="post" action="/deletar/telefones/{{$t->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="fa fa-trash"></i></button></td>
        </form>

    </tr>
    @endforeach

</tbody>

</table>
<br>



    <font size="5px">ENDEREÇOS</font>

    <div class="">
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>
		<th>Rua</th>
    <th>Bairro</th>
    <th>Numero</th>
    <th>Cidade</th>
    <th>CEP</th>
    <th>Complemento</th>
		<th>editar</th>
    <th>deletar</th>
		</tr>
		</thead>
    </div>
<tbody>
      @foreach ($enderecos as $e)
    <tr>
        <td>{{$e->rua}}</td>
        <td>{{$e->bairro}}</td>
        <td>{{$e->numero}}</td>
        <td>{{$e->cidade}}</td>
        <td>{{$e->cep}}</td>
        <td>{{$e->complemento}}</td>
        
        <form method="post" action="/editar/enderecos/{{$e->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-info"><i class="fa fa-edit"></i></button></td>
        </form>

        <form method="post" action="/deletar/enderecos/{{$e->id}}">
        {{csrf_field()}}
        <td><button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="fa fa-trash"></i></button></td>
        </form>
        
    </tr>
    @endforeach

</tbody>

</table>
  
    
    

    
    
    

    
    
    
      
  </div>


      @stop