<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;

class AdminController extends Controller
{
    //

    public function inserirComercio(Request $request)
    {

        $this->validate($request,[
            'nome' => 'required',
            'capa' => 'required'
        ],[
            'nome.required' => 'Insira o nome do comércio',
            'capa.required' => 'Selecione uma opção para capa',
        ]);

        $comercio = new Comercio();
        $telefone = new Telefone();
        // dd($request);

        $comercio->nome = $request->nome;
        $comercio->email = $request->email;
        $comercio->site = $request->site;
        $comercio->resumo = $request->resumo;
        $comercio->facebook = $request->facebook;
        $comercio->atividade = $request->atividade;
        $comercio->capa = $request->capa;
        $comercio->icone = $request->icone;
        $comercio->banner = $request->banner;
    
        $comercio->save();

        $telefone->comercios_id = $comercio->id;
        $telefone->telefone = $request->telefone;
        if(isset($request->whats)){
        $telefone->whats = $request->whats;
        }

        $telefone->save();

        return redirect('/inserir/comercio');

    }

}
