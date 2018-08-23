<?php include './controles/sessaoValida.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fapi Talentos.</title>
        <link type="imagens/png" href="./imagens/fapi.ico" rel="icon">

        <!-- Bootstrap -->
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./estilo/style.css" rel="stylesheet">
        <link href="./fonte_extra/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" >

        <script>
            $('.carousel').carousel({
            interval: 500;
            }
            )
        </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body onload=popup()>

        <!-- Cabecalho -->
        <div class="row cabecalho-container">
            <div class="col-sm-4">

            </div>

            <div class="col-sm-4">
                <div id="logo">
                    <div>
                        <?php include 'menu/logo.php'; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div id="usuario">
                    <div>
                        <?php include 'menu/usuarioInformacoes.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fecha Cabecalho -->

        <!-- Inicio Menu -->
        <div class=" menus-container">
            <div class="col-sm-12">
                <div id="menu">
                    <?php include './menu/menuPrincipal.php'; ?>
                </div>    
            </div>
        </div>
        <!-- Fim Menu -->

        <!-- Inicio Corpo -->
    <center>
        <section id="carouselHome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="width: 200px; height: 150px;" class="d-block w-40" src="./imagens/construcao.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width: 200px; height: 150px;" class="d-block w-40" src="./imagens/logo.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width: 200px; height: 150px;" class="d-block w-40" src="./imagens/logoFAPI.png" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="carouselHome">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="vag">Vagas</h3>
                        <div class="vaga">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="nomeAssunto">
                                                Assistente Administrativo.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data">
                                                <small>17/08/2018</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">para indústria na região de pinhais. salário: R$ 1.850,00 + VT + refeição no local + VA R$ 200,00 + vale farmácia + seguro de vida. horário: 16h Às 00h seg a sáb. ensino médio completo. estabilidade e experiência comprovada na função. fazer a movimentação de trigo nos silos; regular fluxo de moagem, dosadores, cilindros e funcionamento dos rolos; controlar a quantidade e a qualidade da farinha; manter o funcionamento do moinho via sistema; realizar as amostras de farinhas, e encaminhar para o laboratório.</p>
                                </div>
                            </div>
                            <br/>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="nomeAssunto">
                                                Assistente Administrativo.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data">
                                                <small>17/08/2018</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="ass">Assuntos</h3>
                        <div class="assunto">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="nomeAssunto">
                                                Assistente Administrativo.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data">
                                                <small>17/08/2018</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">para indústria na região de pinhais. salário: R$ 1.850,00 + VT + refeição no local + VA R$ 200,00 + vale farmácia + seguro de vida. horário: 16h Às 00h seg a sáb. ensino médio completo. estabilidade e experiência comprovada na função. fazer a movimentação de trigo nos silos; regular fluxo de moagem, dosadores, cilindros e funcionamento dos rolos; controlar a quantidade e a qualidade da farinha; manter o funcionamento do moinho via sistema; realizar as amostras de farinhas, e encaminhar para o laboratório.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </center>
    <br/>
    <!-- Fecha Corpo -->

    <!-- Inicio Rodapé -->
    <div class=" footer">
        <div class="col-sm-12">
            <div id="rodape">
                <?php include './menu/rodape.php'; ?>
            </div>    
        </div>
    </div>
    <!-- Fim rodape -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></scrip>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>