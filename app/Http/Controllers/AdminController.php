<?php

//

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
    
    

    //inserir comercio
    public function inserirComercio(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'nome' => 'required',
            'capa' => 'required',
            'banner' => 'mimes:png,jpg,jpeg|max:2048',
            'icone' => 'mimes:png,jpg,jpeg'
        ],[
            'nome.required' => 'Insira o nome do comércio',
            'capa.required' => 'Selecione uma opção para capa',
            'banner.mimes' => 'O banner precisa estar no formato png, jpg ou jpeg',
            'icone.mimes' => 'A icone precisa estar no formato png, jpg ou jpeg',
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
        

        if(isset($request->banner)){
        $path = Storage::disk('public')->putFile('comercios',$request->banner);
        $comercio->banner = ( URL::to('/storage') . "/" . $path);
        }

        if(isset($request->icone)){
        $path = Storage::disk('public')->putFile('comercios',$request->icone);
        $comercio->icone = ( URL::to('/storage') . "/" . $path);
        }

        //horarios
        if($request->semana = 1)
        {
            $comercio->seg = $request->seg1 . ' - ' . $request->seg2;
            $comercio->ter = $request->seg1 . ' - ' . $request->seg2;
            $comercio->qua = $request->seg1 . ' - ' . $request->seg2;
            $comercio->qui = $request->seg1 . ' - ' . $request->seg2;
            $comercio->sex = $request->seg1 . ' - ' . $request->seg2;
            

        }else
        {   
            if(isset($request->seg1) && isset($request->seg2)){
            $comercio->seg = $request->seg1 . ' - ' . $request->seg2;
            }

            if(isset($request->ter1) && isset($request->ter2)){
            $comercio->ter = $request->ter1 . ' - ' . $request->ter2;
            }

            if(isset($request->qua1) && isset($request->qua2)){
            $comercio->qua = $request->qua1 . ' - ' . $request->qua2;
            }

            if(isset($request->qui1) && isset($request->qui2)){
            $comercio->qui = $request->qui1 . ' - ' . $request->qui2;
            }

            if(isset($request->sex1) && isset($request->sex2)){
            $comercio->sex = $request->sex1 . ' - ' . $request->sex2;
            }

            


        }

        if(isset($request->sab1) && isset($request->sab2)){
            $comercio->sab = $request->sab1 . ' - ' . $request->sab2;
        }

        if(isset($request->dom1) && isset($request->dom2)){
        $comercio->dom = $request->dom1 . ' - ' . $request->dom2;
        }
        
        if(isset($request->feriado1) && isset($request->feriado2)){
        $comercio->feriado = $request->feriado1 . ' - ' . $request->feriado2;
        }

        if(isset($request->nacional1) && isset($request->nacional2)){
        $comercio->feriado_nacional = $request->nacional1 . ' - ' . $nacional2->seg2;
        }
    
        $comercio->save();

        $telefone->comercios_id = $comercio->id;    
        $telefone->telefone = $request->telefone;
        if(isset($request->whats)){
        $telefone->whats = $request->whats;
        }

        $telefone->save();

        return redirect('/inserir/comercio');

    }

    //editar comercios

    public function editarComercios(Request $request)
    {

        // dd($request);
        $this->validate($request,[
            'nome' => 'required',
            'capa' => 'required',
            'banner' => 'mimes:png, jpg, jpeg|max:2048',
            'icone' => 'mimes:png, jpg, jpeg'
        ],[
            'nome.required' => 'Insira o nome do comércio',
            'capa.required' => 'Selecione uma opção para capa',
            'banner.mimes' => 'O banner precisa estar no formato png, jpg ou jpeg',
            'icone.mimes' => 'A icone precisa estar no formato png, jpg ou jpeg',
            'banner.max' => 'Imagem pesada'
        ]);

        $comercio = Comercio::find($request->id);
        // 

        $comercio->nome = $request->nome;
        $comercio->email = $request->email;
        $comercio->site = $request->site;
        $comercio->resumo = $request->resumo;
        $comercio->facebook = $request->facebook;
        $comercio->atividade = $request->atividade;
        $comercio->capa = $request->capa;
        

        if(isset($request->banner)){
        $path = Storage::disk('public')->putFile('comercios',$request->banner);
        $comercio->banner = ( URL::to('/storage') . "/" . $path);
        }

        if(isset($request->icone)){
        $path = Storage::disk('public')->putFile('comercios',$request->icone);
        $comercio->icone = ( URL::to('/storage') . "/" . $path);
        }

        //horarios
        
        if($request->semana = 1 && isset($request->seg1))
        {
            $comercio->seg = $request->seg1 . ' - ' . $request->seg2;
            $comercio->ter = $request->seg1 . ' - ' . $request->seg2;
            $comercio->qua = $request->seg1 . ' - ' . $request->seg2;
            $comercio->qui = $request->seg1 . ' - ' . $request->seg2;
            $comercio->sex = $request->seg1 . ' - ' . $request->seg2;
            

        }else
        {   
            if(isset($request->seg1) && isset($request->seg2)){
            $comercio->seg = $request->seg1 . ' - ' . $request->seg2;
            }

            if(isset($request->ter1) && isset($request->ter2)){
            $comercio->ter = $request->ter1 . ' - ' . $request->ter2;
            }

            if(isset($request->qua1) && isset($request->qua2)){
            $comercio->qua = $request->qua1 . ' - ' . $request->qua2;
            }

            if(isset($request->qui1) && isset($request->qui2)){
            $comercio->qui = $request->qui1 . ' - ' . $request->qui2;
            }

            if(isset($request->sex1) && isset($request->sex2)){
            $comercio->sex = $request->sex1 . ' - ' . $request->sex2;
            }

            


        }

        if(isset($request->sab1) && isset($request->sab2)){
            $comercio->sab = $request->sab1 . ' - ' . $request->sab2;
        }

        if(isset($request->dom1) && isset($request->dom2)){
        $comercio->dom = $request->dom1 . ' - ' . $request->dom2;
        }
        
        if(isset($request->feriado1) && isset($request->feriado2)){
        $comercio->feriado = $request->feriado1 . ' - ' . $request->feriado2;
        }

        if(isset($request->nacional1) && isset($request->nacional2)){
        $comercio->feriado_nacional = $request->nacional1 . ' - ' . $request->nacional2;
        }
    
        $comercio->save();


        return redirect('/lista/comercios');

    }

    //deletar comercio

    public function deletar_comercios(Comercio $dados)
    {
        $dados->delete();
        return redirect('/lista/comercios');

    }


    //inserir telefone
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

    //editar telefone
    public function editarTelefone(Request $request)
    {
        $telefone = Telefone::find($request->id);
        $telefone->telefone = $request->telefone;

        if(isset($request->whats)){
        $telefone->whats = $request->whats;
        }

        $telefone->save();

        return redirect('/lista/comercios') ;
    }

    //deletar telefone
    public function deletar_telefones(Telefone $dados)
    {
        $dados->delete();
        return redirect('/lista/comercios');

    }

    //inserir o endereço
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

        

        $endereco->save();

        return redirect('/lista/comercios') ;
    }

    //editar endereço
    public function editarEnderecos(Request $request)
    {
        // dd($request);
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

        $endereco = Endereco::find($request->id);

        $endereco->rua = $request->rua;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->cep = $request->cep;
        $endereco->complemento = $request->complemento;


        

        $endereco->save();

        return redirect('/lista/comercios') ;
    }

    //deletar endereco
    public function deletar_enderecos(Endereco $dados)
    {
        $dados->delete();
        return redirect('/lista/comercios');

    }

    //view com lista dos comercios 
    public function lista_comercios()
    {
        $dados = Comercio::All();

        return view('lista_comercios', compact('dados'));


    }

    //pagina de informações de um comercio especifico
    public function comercio_informacoes(Comercio $dados)
    {
        $telefones = Telefone::where('comercios_id', '=', $dados->id)->get();

        $enderecos = Endereco::where('comercios_id', '=', $dados->id)->get();

        // dd($telefones);

        return view('comercios_informacao', compact('dados', 'telefones', 'enderecos'));

        
    }

    //view editar comercio
    public function editar_comercios(Comercio $dados)
    {

        return view('editar_comercios', compact('dados'));
    }

    //view editar telefone
    public function editar_telefones(Telefone $dados)
    {
        return view('editar_telefone', compact('dados'));
        
    }

    //view editar endereço
    public function editar_enderecos(Endereco $dados)
    {
        
        return view('editar_enderecos', compact('dados'));

    }

    //view adicionar telefone
    public function adicionar_telefone(Comercio $dados)
    {
        // dd($dados);
        $dados = $dados->id;

        return view('adicionar_telefone', compact('dados'));

        
    }

    //view adicionar endereço
    public function adicionar_endereco(Comercio $dados)
    {
        // dd($dados);
        $dados = $dados->id;

        return view('adicionar_endereco', compact('dados'));

        
    }


}
