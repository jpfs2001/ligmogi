<?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");


//do something with this information
if( $iPod || $iPhone ){
    $isAndroid = 0;
}else if($Android){
    $isAndroid = 1;
}else{
    $isAndroid = 2;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
				<meta name="author" content="João Pedro e Altamir Silva" />
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                <link rel="icon" href="favicon.ico" type="image/x-icon">
                <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="{{ URL::asset('css/ligmogi.css') }}" >
                <link rel="shortcut icon" href="{{URL::asset('image/fav')}}" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                

            @yield('seo')


                <style>
    .barraPesquisa { background: #B40404; }
    .tabNome.tabAtiva:after,
    .tabAtiviade.tabAtiva:after,
    .tabTelefone.tabAtiva:after{ border-top-color: #FF4000; }

    .tabNome.tabAtiva, .tabNome.tabInativa:hover,
    .tabAtividade.tabAtiva, .tabAtividade.tabInativa:hover,
    .tabTelefone.tabAtiva, .tabTelefone.tabInativa:hover { background: #FF4000; border-top-color: #FF4000; }

    .formNome, .formAtividade, .formTelefone { border: 4px solid #FF4000; }

    .formNome button.btnPesquisar, .formAtividade button.btnPesquisar, .formTelefone button.btnPesquisar { background-color: #FF4000; }

</style>
@laravelPWA
</head>

<body >
    <nav class="navbar">
        <div align="center">
            <div class="navbar-brand col-lg-12">

            @if($isAndroid == 2)
                <a class="" href="/"><img src="{{URL::asset('image/logo.jpg')}}" alt="Ligmogi" width="35%"title="Ligmogi" class="img-responsive" /></a>

            @else
            <a class="" href="/"><img src="{{URL::asset('image/logo.jpg')}}" alt="Ligmogi" title="Ligmogi" class="img-responsive" /></a>
            @endif


                </nav>
            @if($isAndroid == 1)

            <div class="container" align="justify" style="font-size: 22px;color:#b40404" >
                <p>Clique em <img src="{{URL::asset('image/more.png')}} " width="10%">, no canto superior a direita, e depois em Adicionar a tela inicial para baixar nosso aplicativo</p>
            </div>

            @elseif($isAndroid == 0)
            <div class="container" align="justify" style="font-size: 22px;color:#b40404" >
                <p>Clique em <img src="{{URL::asset('image/iphone1.png')}} " width="15%">, na barra inferior, e depois em <img src="{{URL::asset('image/iphone2.png')}}" width="20%"> para baixar nosso aplicativo</p>
            </div>





            @endif
    </div>


            
            
            <div class="collapse navbar-collapse menuTopo" id="menu_recolhe">
                <ul class="nav navbar-nav">
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    
    <div class="container-fluid barraPesquisa">
        <div class="container">
    
            <div class="row">
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapperPesquisa">
    
                    <div class="row tiposPesquisa">
                        
                    </div> <!-- ./tiposPesquisa -->
    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tiposFormularios">
    
                        <!-- nome -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="nome" style="display:block;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formNome">
                                <form action="/pesquisar/nome" enctype="multipart/form-data" method="get" id="formEmpresa">
                                    <input type="text" name="nome" id="e" placeholder="Empresa ou serviço" class="forms" autocomplete="off"  required aria-label="Campo nome do comercio">
                                    <button type="submit" class="btnPesquisar" aria-label="Pesquisar"></button>
                                </form>
                            </div>
                        </div>
    
                        <!-- atividade -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="atividade" style="display:none;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formAtividade">
                                <form name="formAtividade" action="/pesquisar/atividade" enctype="multipart/form-data" method="get" id="formAtividade">
                                    <input type="text" name="atividade" id="r" placeholder="Atividade" class="forms" autocomplete="off"  required aria-label="Campo Atividade" >
                                    <button type="submit" class="btnPesquisar" aria-label="Pesquisar"></button>
                                </form>
                            </div>
                        </div>
    
    <script>

let deferredPrompt;

        window.addEventListener('beforeinstallprompt', (e) => {
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        ...
        });

        window.addEventListener('beforeinstallprompt', (e) => {
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can add to home screen
  showInstallPromotion();
}); 

btnAdd.addEventListener('click', (e) => {
  // hide our user interface that shows our A2HS button
  btnAdd.style.display = 'none';
  // Show the prompt
  deferredPrompt.prompt();
  // Wait for the user to respond to the prompt
  deferredPrompt.userChoice
    .then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
});

    </script>
    
                    </div> <!-- ./tiposformulario -->
                </div> <!-- ./wrapper pesquisa -->
            </div><!-- ./row -->
        </div><!-- ./container -->
    </div> <!-- ./container-fluid -->
    
    <div class="container" id="resultado">
    @yield('content')
    


     
    </div> <!-- ./container -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
        <script>
            var pagina = false;
        </script>
    <script src="{{ URL::asset('js/funcoes.js') }}"></script>
    <div class="container-fluid">
    

        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margemTopo20" align="center">
                <footer class="fixarRodape">
                <p class="rodape">&copy; LigMogi - Todos os direitos reservados<br><a href="https://github.com/Mysfer">Desenvolvido por João Pedro de Freitas S.</a></p>
            </div>
        </div>
    </div>

    </body>
</html>