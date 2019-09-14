@extends('layouts.nav')

<?php 

$count = 0;
$count2 = 0;
?>

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/comercios.css') }}" >

<h3><a href="/admin">/Admin</a><a href="/lista/comercios">/Comercios</a></h3>
    <div align="center">
    
    <h1><p><a href="/adicionar/telefone/{{$dados->id}}">Adicionar telefone</a></p>
    <p><a href="/adicionar/endereco/{{$dados->id}}">Adicionar endereço</a>
    <a href="/adicionar/images/{{$dados->id}}">Adicionar imagem</a></p></h1>
    <br><br><br>
    
    </div>

    <div class="col-md-6">
    <h1>INFORMAÇÕES</h1 >
      
      <h4><p>Nome: {{$dados->nome}}</p>
      <p>Email: {{$dados->email}}</p>
      <p>site: {{$dados->site}}</p>
      <p>resumo: {{$dados->resumo}}</p>
      <p>Facebook: {{$dados->facebook}}</p>
      <p>Atividade: {{$dados->atividades}}</p>
      <p>Capa: {{$dados->capa == 1 ? 'sim' : 'não'}}</p></h4>

    </div>

    <div class="img-fluid">
      <img class="img-fluid" src="{{ $dados->banner }}" width="50%">
    </div>
    <div class="img-fluid">
      <img class="img-fluid" src="{{ $dados->icone }}"  width="10%">
    </div>

    <h3>TELEFONE</h3>
    <div class="col-sm-10">
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
        <td>{{$t->telefone}} <i class="{{$t->whats == 1 ? 'fa fa-whatsapp' : ''}}"></i></a></td>

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
<script src="{{ URL::asset('js/comercios.js') }}"></script> 
        <div class="row">

        <div class="col-lg-8">
            
        <section class="awSlider">
            <div  class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($images as $i)                    
                        <li data-target=".carousel" data-slide-to="{{$count}}" class="{{$count == 0 ? 'active' : ''}}"></li>
                    <?php 
                        $count++;
                    ?>
                    @endforeach

                </ol>
                  <div class="carousel-inner" role="listbox">

                    @foreach($images as $i)
                    <div class="item{{$count2 == 0 ? ' active' : ''}}">

                        <img src="{{$i->link}}" class="img" width="100%">
                        <form method="post" action="/deletar/images/{{$i->id}}">
                            {{csrf_field()}}
                          <div align="center"><button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="fa fa-trash"></i></button></div>
                        </form>
                        <?php $count2++; ?>
                    </div>
                    @endforeach
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Geri</span>
                </a>
                <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">İleri</span>
                </a>
              </div>
              </section>
      
  </div>


      @stop