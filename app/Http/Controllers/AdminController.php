<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //

    public function inserirComercio(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'nome' => 'required',
            'capa' => 'required',
            'banner' => 'mimes:png|max:2048',
            'icone' => 'mimes:png'
        ],[
            'nome.required' => 'Insira o nome do comércio',
            'capa.required' => 'Selecione uma opção para capa',
            'banner.mimes' => 'O banner precisa estar no formato png',
            'icone.mimes' => 'A icone precisa estar no formato png',
            'banner.max' => 'Imagem pesada'
        ]);

        $comercio = new Comercio();
        $telefone = new Telefone();
        // 

        $comercio->nome = $request->nome;
        $comercio->email = $request->email;
        $comercio->site = $request->site;
        $comercio->resumo = $request->resumo;
        $comercio->facebook = $request->facebook;
        $comercio->atividade = $request->atividade;
        $comercio->capa = $request->capa;
        


        $path = Storage::disk('public')->putFile('comercios',$request->banner);
        $comercio->banner = ( URL::to('/storage') . "/" . $path);

        $path = Storage::disk('public')->putFile('comercios',$request->icone);
        $comercio->icone = ( URL::to('/storage') . "/" . $path);
    
        $comercio->save();

        $telefone->comercios_id = $comercio->id;
        $telefone->telefone = $request->telefone;
        if(isset($request->whats)){
        $telefone->whats = $request->whats;
        }

        $telefone->save();

        return redirect('/inserir/comercio');

    }

    public function lista_comercios()
    {
        $dados = Comercio::All();

        return view('lista_comercios', compact('dados'));


    }

    public function comercio_informacoes(Comercio $dados)
    {
        // dd($dados);

        return view('comercios_informacao', compact('dados'));

        
    }

}
