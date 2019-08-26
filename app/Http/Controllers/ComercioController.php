<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;
use App\Endereco;
use App\Horario;
use DB;

class ComercioController extends Controller
{

    //rota que busca resultados da pesquisa
    public function pesquisar(Request $request)
    {

      //pesquisa por nome do comercio
      if(isset($request->nome))
      {
        $dados = DB::table('comercios')
        ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
        'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
        'telefones.telefone as telefone', 'telefones.whats as whats')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('comercios.nome', 'like', '%' . $request->nome . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->get();
      }

      //pesquisa por atividade
      if(isset($request->atividade))
      {
        $dados = DB::table('comercios')
        ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
        'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
        'telefones.telefone as telefone', 'telefones.whats as whats')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('comercios.atividade', 'like', '%' . $request->atividade . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->get();
      }

      //pesquisa por telefone
      if(isset($request->telefone))
      {
        $dados = DB::table('comercios')
        ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
        'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
        'telefones.telefone as telefone', 'telefones.whats as whats')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('telefones.telefone', 'like', '%' . $request->telefone . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->get();
      }
      //dd($dados);

        return view("resultados", compact('dados'));
    }

    // rota que retorna a pagina index com os comercios em destaque
    public function index()
    {
      $dados = Comercio::where('capa', '=', '1')->get();
      //dd($dados);
      return view('index', compact('dados'));
    }

    public function comercios(Comercio $dados)
    {
      return view('comercios', compact('dados'));
    }

}
