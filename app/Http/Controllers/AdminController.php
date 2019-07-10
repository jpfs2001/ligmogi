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
            'capa' => 'required',
            'banner.*' => 'image|mimes:jpg,png,gif,jpeg|max:2048',
            'icone.*' => 'image|mimes:jpg,png,gif,jpeg'
        ],[
            'nome.required' => 'Insira o nome do comércio',
            'capa.required' => 'Selecione uma opção para capa',
            'banner.image' => 'O banner principal precisa ser uma imagem',
            'banner.mimes' => 'O banner precisa estar no formato jpg, jpeg, png ou gif',
            'icone.image' => 'A icone principal precisa ser uma imagem',
            'icone.mimes' => 'A icone precisa estar no formato jpg, jpeg, png ou gif',
            'banner.max' => 'Imagem pesada'
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
