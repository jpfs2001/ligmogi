<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;
use App\Endereco;
use App\Horario;

class ComercioController extends Controller
{
    public function pesquisar(Request $request)
    {
        // $dados = Comercio()->where('nome', like, '%' + $request->nome + '%');
        $dados = Comercio::where('nome', 'like', '%' . $request->nome . '%')->get();    

        return view("resultados", compact('dados'));
    }




}
