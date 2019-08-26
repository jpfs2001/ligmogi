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
    public function pesquisar(Request $request)
    {

      //  $dados = Comercio::where('nome', 'like', '%' . $request->nome . '%')->get(); 
      $dados = DB::table('comercios')
    ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook', 'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero')
    ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
    ->where('comercios.nome', 'like', '%' . $request->nome . '%' )
    ->groupBy('comercios.id')
    ->orderBy('comercios.capa', 'DESC')
    ->get();
    //dd($dados);

        return view("resultados", compact('dados'));
    }




}
