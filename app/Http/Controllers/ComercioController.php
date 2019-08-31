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
        'telefones.telefone as telefone', 'telefones.whats as whats', 'comercios.id as id')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('comercios.nome', 'like', '%' . $request->nome . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->orderBy('comercios.banner', 'DESC')
        ->get();
      }

      //pesquisa por atividade
      if(isset($request->atividade))
      {
        $dados = DB::table('comercios')
        ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
        'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
        'telefones.telefone as telefone', 'telefones.whats as whats', 'comercios.id as id')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('comercios.atividade', 'like', '%' . $request->atividade . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->orderBy('comercios.banner', 'DESC')
        ->get();
      }

      //pesquisa por telefone
      if(isset($request->telefone))
      {
        $dados = DB::table('comercios')
        ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
        'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
        'telefones.telefone as telefone', 'telefones.whats as whats', 'comercios.id as id')
        ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
        ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
        ->where('telefones.telefone', 'like', '%' . $request->telefone . '%' )
        ->groupBy('comercios.id')
        ->orderBy('comercios.capa', 'DESC')
        ->orderBy('comercios.banner', 'DESC')
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
      $telefones = Telefone::where('comercios_id', '=', $dados->id)
      ->orderBy('whats', 'desc')
      ->get();
      
      $enderecos = Endereco::where('comercios_id', '=', $dados->id)
      ->limit('2')
      ->get();

      if(isset($enderecos))
      {

        $address = Endereco::where('comercios_id', '=', $dados->id)
        ->limit('1')
        ->get();

        foreach($address as $e)
        {
          
          $address = $e->rua . ', ' . $e->numero . ' - ' . $e->bairro . ', ' . $e->cidade;    
        }
        $address = str_replace(' ','+', $address);

      }

      //dd($address);

      return view('comercios', compact('dados', 'telefones', 'enderecos', 'address'));
    }

}
