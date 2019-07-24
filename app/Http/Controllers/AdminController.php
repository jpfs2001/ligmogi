<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comercio;
use App\Telefone;
use App\Endereco;
use App\Horario;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    
    //Controller para inserir comercio
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

    //inserir o telefone no banco de dados
    public function addTelefone(Request $request)
    {
     
        $telefone = new Telefone(); 

        $telefone->comercios_id = $request->comercios_id;
        $telefone->telefone = $request->telefone;

        if(isset($request->whats)){
        $telefone->whats = $request->whats;
        }

        $telefone->save();

        return redirect('/lista/comercios') ;
    }

    //inserir o endereço no banco de dados
    public function addEndereco(Request $request)
    {
     
        $this->validate($request,[
            'rua' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'cep' => 'required'
            
        ],[
            'rua.required' => 'Insira a rua do comércio',
            'bairro.required' => 'Insira o bairro do comércio',
            'numero.required' => 'Insira o numero do comércio',
            'cidade.required' => 'Insira a cidade do comércio',
            'cep.required' => 'Insira o cep do comércio'
            
        ]);

        $endereco = new Endereco(); 

        $endereco->comercios_id = $request->comercios_id;
        $endereco->rua = $request->rua;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->cep = $request->cep;
        $endereco->complemento = $request->complemento;
        $endereco->latitude = $request->latitude;
        $endereco->longitude = $request->longitude;

        

        $endereco->save();

        return redirect('/lista/comercios') ;
    }

    //insere o horario no banco de dados
    public function addHorario(Request $request)
    {
    
    


    }



    //controller que retorna os dados da tebela comercio para a view lista_comercios
    public function lista_comercios()
    {
        $dados = Comercio::All();

        return view('lista_comercios', compact('dados'));


    }

    //pagina de informações de um comercio especifico
    public function comercio_informacoes(Comercio $dados)
    {
        // dd($dados);

        return view('comercios_informacao', compact('dados'));

        
    }

    //view com formulario para adicionar um novo telefone a um comercio
    public function adicionar_telefone($dados)
    {
        // dd($dados);
        $dados = $dados->id;

        return view('adicionar_telefone', compact('dados'));

        
    }

    //view com formulario para adicionar um novo endereço a um comercio
    public function adicionar_endereco(Comercio $dados)
    {
        // dd($dados);
        $dados = $dados->id;

        return view('adicionar_endereco', compact('dados'));

        
    }

    //view com formulario para adicionar o horario de funcionamento ou alterar o já existente
    public function adicionar_horario(Comercio $dados)
    {
        // dd($dados);
        $dados = $dados->id;

        return view('adicionar_horario', compact('dados'));

        
    }

}
