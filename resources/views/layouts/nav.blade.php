
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /><title>Ligmogi - O guia comercial da região de Mogi Mirim</title>
				<meta name="description" content="Ligmogi é o guia comercial ideal para você que procura o contado de algum prestador de serviços na região de Mogi Mirim" />
				<meta name="keywords" content="Ligmogi, Mogi, Mirim, Guia, Empresas, Lista, Telefonia">
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

</style></head>

<body >
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="">
                <a class="navbar-brand" href="/"><img src="{{URL::asset('image/logo.jpeg')}}" alt="Ligmogi" title="Ligmogi" class="img-responsive" /></a>
            </div>
    
            <div class="collapse navbar-collapse menuTopo" id="menu_recolhe">
                <ul class="nav navbar-nav">
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="container-fluid barraPesquisa">
        <div class="container">
    
            <div class="row">
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapperPesquisa">
    
                    <div class="row tiposPesquisa">
                        <!-- nome -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wrapperTab">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs tabNome tabAtiva">
                                <div class="icone" title="Nome"></div>
                                <div class="labelTab">Nome</div>
                            </div>
                        </div>
    
                        <!-- atividade -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wrapperTab">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs tabAtividade tabInativa">
                                <div class="icone" title="Atividade"></div>
                                <div class="labelTab">Atividade</div>
                            </div>
                        </div>
    
                        <!-- telefone -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wrapperTab">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs tabTelefone tabInativa">
                                <div class="icone" title="Telefone"></div>
                                <div class="labelTab"> Telefone</div>
                            </div>
                        </div>
                    </div> <!-- ./tiposPesquisa -->
    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tiposFormularios">
    
                        <!-- nome -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="nome" style="display:block;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formNome">
                                <form action="/pesquisar" enctype="multipart/form-data" method="get" id="formEmpresa">
                                    <input type="text" name="nome" id="e" placeholder="Empresa ou serviço" class="forms" autocomplete="off"  required aria-label="Campo nome do comercio">
                                    <button type="submit" class="btnPesquisar" aria-label="Pesquisar"></button>
                                </form>
                            </div>
                        </div>
    
                        <!-- atividade -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="atividade" style="display:none;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formAtividade">
                                <form name="formAtividade" action="/pesquisar" enctype="multipart/form-data" method="get" id="formAtividade">
                                    <input type="text" name="atividade" id="r" placeholder="Atividade" class="forms" autocomplete="off"  required aria-label="Campo Atividade" >
                                    <button type="submit" class="btnPesquisar" aria-label="Pesquisar"></button>
                                </form>
                            </div>
                        </div>
    

    
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
                <p class="rodape">&copy; LigMogi - Todos os direitos reservados<br><a href="">Desenvolvido por Altamir Junior</a></p>
            </div>
        </div>
    </div>

    </body>
</html>