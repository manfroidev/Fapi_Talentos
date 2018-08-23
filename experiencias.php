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

            <div class="col-sm-5">
                <div id="titulo">
                    <div>
                    </div>
                </div>
            </div><div class="col-sm-3">
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
                    <?php include 'menu/menuPrincipal.php'; ?>
                </div>    
            </div>
        </div>
        <br>
        <!-- Fim Menu -->

        <!-- Inicio Corpo -->
    <center>
        <section id="trablheConosco">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> Experiência </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="borda">
                                <form>
                                    <div class="tituloFuncionario">
                                        <h5>Antepenúltima Empresa</h5>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="empresa">Empresa</label>
                                            <input type="text" class="form-control form-control-sm" id="empresa" placeholder="Nome da Empresa" name="empresa">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dataInicio">Data Inicio</label>
                                            <input type="date" class="form-control form-control-sm" id="dataInicio" name="dataInicio">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dataTermino">Data Termino</label>
                                            <input type="date" class="form-control form-control-sm" id="dataTermino" name="dataTermino">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="cargo">Cargo</label>
                                            <select type="text" class="form-control form-control-sm" id="cargo" placeholder="Cargo" name="cargo">
                                                <option value="">Selecione o Cargo...</option>
                                                <option value="Assistente Administrativio">Assistente Administrativio</option>
                                                <option value="Assistente Logístico">Assistente Logístico</option>
                                                <option value="Assitente Recursos Humanos">Assistente Recursos Humanos</option>
                                            </select>    
                                        </div>
                                    </div>                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="descrição">Descrição das Atividades</label>
                                            <textarea type="text" class="form-control form-control-sm" id="descricao" placeholder="Descreva suas atividades com detalhes" name="descricao" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="tituloFuncionario">
                                        <h5>Penúltima Empresa</h5>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="empresa1">Empresa</label>
                                            <input type="text" class="form-control form-control-sm" id="empresa1" placeholder="Nome da Empresa" name="empresa1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dataInicio1">Data Inicio</label>
                                            <input type="date" class="form-control form-control-sm" id="dataInicio1" name="dataInicio1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dataTermino1">Data Termino</label>
                                            <input type="date" class="form-control form-control-sm" id="dataTermino1" name="dataTermino1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="cargo1">Cargo</label>
                                            <input type="text" class="form-control form-control-sm" id="cargo1" placeholder="Cargo" name="cargo1">
                                        </div>
                                    </div>                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="descricao1">Descrição das Atividades</label>
                                            <textarea type="text" class="form-control form-control-sm" id="descricao1" placeholder="Descreva suas atividades com detalhes" name="descricao1" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="tituloFuncionario">
                                        <h5>Última Empresa</h5>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="empresa2">Empresa</label>
                                            <input type="text" class="form-control form-control-sm" id="empresa2" placeholder="Nome da Empresa" name="empresa2">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dataInicio2">Data Inicio</label>
                                            <input type="date" class="form-control form-control-sm" id="dataInicio2" name="dataInicio2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dataTermino2">Data Termino</label>
                                            <input type="date" class="form-control form-control-sm" id="dataTermino2" name="dataTermino2">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="cargo2">Cargo</label>
                                            <input type="text" class="form-control form-control-sm" id="cargo2" placeholder="Cargo" name="cargo2">
                                        </div>
                                    </div>                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="descricao2">Descrição das Atividades</label>
                                            <textarea type="text" class="form-control form-control-sm" id="descricao2" placeholder="Descreva suas atividades com detalhes" name="descricao2" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-outline-success" name="enviar">Gravar</button>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </center>
    <br>
    <!-- Fecha Corpo -->

    <!-- Inicio Rodapé -->
    <div class=" footer">
        <div class="col-sm-12">
            <div id="rodape">
                <?php include 'menu/rodape.php'; ?>
            </div>    
        </div>
    </div>
    <!-- Fim rodape -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>