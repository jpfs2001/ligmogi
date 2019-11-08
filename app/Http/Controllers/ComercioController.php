<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;
use App\Endereco;
use App\Horario;
use App\Image;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use DB;

class ComercioController extends Controller
{

    //rota que busca resultados da pesquisa
    public function pesquisarNome(Request $request)
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
        ->paginate(15);

        return view("resultados", compact('dados'));
    }

    public function pesquisarAtividade(Request $request)
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
        ->paginate(15);

        return view("resultados", compact('dados'));
    }

    // rota que retorna a pagina index com os comercios em destaque
    public function index()
    {

      
      $dados = Comercio::orderBy("capa", "DESC")
      ->orderBy("nome", "ASC")
      ->get();

      //dd($dados);
      return view('index', compact('dados'));

    }

    public function comercios(Comercio $dados)
    {
      $telefones = Telefone::where('comercios_id', '=', $dados->id)
      ->orderBy('whats', 'desc')
      ->get();
      
      $enderecos = Endereco::where('comercios_id', '=', $dados->id)
      ->get();

      if(isset($enderecos))
      {

        $addresss = Endereco::where('comercios_id', '=', $dados->id)
        ->limit('1')  
        ->get();

          

        foreach($addresss as $e)
        {
          
          $address = $e->rua . ', ' . $e->numero . ' - ' . $e->bairro . ', ' . $e->cidade; 
          $rua = $e->rua;
          $bairro = $e->bairro;
          $numero = $e->numero;
          $cep = $e->cep;
          $cidade = $e->cidade;
        }
        $address = str_replace(' ','+', $address);

      }

      $images = Image::where('comercios_id', '=', $dados->id)
      ->get();

      
      

      return view('comercios', compact('dados', 'telefones', 'enderecos', 'address', 'images','rua', 'numero', 'bairro', 'cep', 'cidade'));
    }

}
