
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title>Ligmogi - O guia comercial da região de Mogi Mirim</title>
				<meta name="description" content="Ligmogi é o guia comercial ideal para você que procura o contado de algum prestador de serviços na região de Mogi Mirim" />
				<meta name="keywords" content="Ligmogi, Mogi, Mirim, Guia, Empresas, Lista, Telefonia">
				<meta name="author" content="João Pedro e Altamir Silva" />
				<meta name="Googlebot" content="all" />
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                <link rel="icon" href="favicon.ico" type="image/x-icon">
                <base href="http://127.0.0.1:8000/Ligmogi/"><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
                <link rel="stylesheet" href="{{ URL::asset('css/ligmogi.css') }}" >
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
        <div class="navbar-header">
            <a class="navbar-brand" href="/ "><img src="{{ URL::asset('image/logo.jpeg') }}" alt="Ligmogi" title="Ligmogi" class="img-responsive" /></a>
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

                    <span class="loading"><img src="img/carregando.gif" alt="carregando..." title="carregando..." width="100" height="31" style="float: right;"></span>

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
                            <div class="icone" title="Ativdade"></div>
                            <div class="labelTab">Atividade</div>
                        </div>
                    </div>

                    <!-- telefone -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 wrapperTab">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs tabTelefone tabInativa">
                            <div class="icone" title="Telefone"></div>
                            <div class="labelTab">Telefone</div>
                        </div>
                    </div>
                </div> <!-- ./tiposPesquisa -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tiposFormularios">

                    <!-- nome -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="nome" style="display:block;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formNome">
                            <form name="formNome" action="resultados.php" enctype="multipart/form-data" method="get" id="form">
                                <input type="text" name="e" id="e" placeholder="Digite o nome da Empresa" class="forms" autocomplete="off"  required >
                                <button type="submit" class="btnPesquisar"></button>
                            </form>
                        </div>
                    </div>

                    <!-- atividade -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="ativdade" style="display:none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formAtividade">
                            <form name="formResidencia" action="resultados.php" enctype="multipart/form-data" method="get" id="formResidencia">
                                <input type="text" name="r" id="r" placeholder="Nome" class="forms" autocomplete="off"  required >
                                <button type="submit" class="btnPesquisar"></button>
                            </form>
                        </div>
                    </div>

                    <!-- telefone -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divForm" id="telefone" style="display:none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formTelefone">
                            <form name="formTelefone" action="resultados.php" enctype="multipart/form-data" method="get" id="formTelefone">
                                <input type="text" name="t" id="t" placeholder="Telefone" class="forms tel" autocomplete="off"  required >
                                <button type="submit" class="btnPesquisar"></button>
                            </form>
                        </div>
                    </div>

                </div> <!-- ./tiposformulario -->
            </div> <!-- ./wrapper pesquisa -->
        </div><!-- ./row -->
    </div><!-- ./container -->
</div> <!-- ./container-fluid -->

<div class="container" id="resultado">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 anunciosHome hidden-xs hidden-sm" id="anunciosHome">

                    
               <!--exibindo anuncios-->
                                            </div><!-- ./anunciosHome -->
    </div> <!-- ./row -->
</div> <!-- ./container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        var pagina = false;
    </script>
<script src="{{ URL::asset('js/funcoes.js') }}"></script>
<script>
    // popup
    function abrir(){
        document.getElementById('bg').style.display='block';
        document.getElementById('popup').style.display = 'block';
        setTimeout ("fechar()", 10000);
    }

    function fechar(){
        document.getElementById('bg').style.display='none';
        document.getElementById('popup').style.display = 'none';

    }
</script><div class="container-fluid">
<div class="container">
@yield('content')
</div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margemTopo20">
            <p class="rodape text-center">&copy; 2019 Ligmogi - Todos os direitos reservados<br><a href="">Desenvolvido por João Pedro de Freitas Silva</a></p>
        </div>
    </div>
</div>

</body>
</html>