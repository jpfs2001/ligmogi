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

  function cleanStr($str)
  {

      return preg_replace("/[^a-zA -Z0-9_.]/", "", strtr($str, "ÁÍÓÚÉÄÏÖÜËÀÌÒÙÈÃÕÂÎÔÛÊáíóúéäïöüëàìòùèãõâîôûêÇç", 
                                                              "AIOUEAIOUEAIOUEAOAIOUEaioueaioueaioueaoaioueCc"));
  }

    //rota que busca resultados da pesquisa
    public function pesquisarNome(Request $request)
    {

      function cleanStr($str)
      {
        $str = preg_replace('/[áàãâäÀÁÃ]/ui', 'a', $str);
        $str = preg_replace('/[G]/ui', 'g', $str);
        $str = preg_replace('/[S]/ui', 's', $str);

          return $str;
      }



      $request->nome = cleanStr($request->nome); 

      if($request->nome == "gas")
      {
        $dados = DB::table('comercios')
              ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
              'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
              'telefones.telefone as telefone', 'telefones.whats as whats', 'comercios.id as id')
              ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
              ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
              ->orWhere('comercios.departamento', 'like', '%' . $request->nome . '%')
              ->orWhere('comercios.atividade', 'like', '%' . $request->nome . '%')
              ->groupBy('comercios.id')
              ->orderBy('comercios.capa', 'DESC')
              ->orderBy('comercios.nome', 'ASC')
              ->limit('1')
              ->paginate(15);
      
      
      
      }else{
              $dados = DB::table('comercios')
              ->select('comercios.nome as nome', 'comercios.banner as banner', 'comercios.facebook as facebook',
              'enderecos.rua as rua', 'enderecos.bairro as bairro', 'enderecos.numero as numero',
              'telefones.telefone as telefone', 'telefones.whats as whats', 'comercios.id as id')
              ->join('enderecos', 'comercios.id', '=', 'enderecos.comercios_id')
              ->join('telefones', 'telefones.comercios_id', '=', 'comercios.id')
              ->where('comercios.nome', 'like', '%' . $request->nome . '%' )
              ->orWhere('comercios.departamento', 'like', '%' . $request->nome . '%')
              ->orWhere('comercios.atividade', 'like', '%' . $request->nome . '%')
              ->groupBy('comercios.id')
              ->orderBy('comercios.capa', 'DESC')
              ->orderBy('comercios.nome', 'ASC')
              ->limit('1')
              ->paginate(15);
        }

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

      //dd($enderecos);


      
      foreach($enderecos as $endereco)
      {
    
        //caso o endereço tenha latitude e longitude
        if($endereco->latitude != 0 && $endereco->longitude != 0)
        {
          $addresss = Endereco::where('comercios_id', '=', $dados->id)
          ->limit('1')  
          ->get();

          foreach($addresss as $e)
            {
              
              $address = $e->latitude . '+' . $e->longitude; 
              $rua = $e->rua;
              $bairro = $e->bairro;
              $numero = $e->numero;
              $cep = $e->cep;
              $cidade = $e->cidade;
            }
            $address = str_replace(' ','+', $address);


        //caso o endereço não tenha latitude e longitude
        }else
        {

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

          
        }
      }
      $images = Image::where('comercios_id', '=', $dados->id)
      ->get();

      return view('comercios', compact('dados', 'telefones', 'enderecos', 'address', 'images','rua', 'numero', 'bairro', 'cep', 'cidade'));
    }

}
