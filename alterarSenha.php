
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fapi Talentos.</title>
        <link type="imagens/png" href="./imagens/fapi_talentos.ico" rel="icon">

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
            <div class="col-sm-3">
                <div id="logo">
                    <div>
                        <?php include 'menu/logo.php'; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div id="titulo">
                    <div>
                        <?php include 'menu/nomeEmpresa.php'; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="usuario">
                    <div>
                        <?php include 'menu/usuarioInformacoesAlterarSenha.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fecha Cabecalho -->

        <!-- Inicio Menu -->
        <div class=" menus-container">
            <div class="col-sm-12">
                <div id="menu">

                </div>    
            </div>
        </div>
        <!-- Fim Menu -->

        <!-- Inicio Corpo -->
    <legend align="center">Bem Vindo Usuário</legend>

    <h2  align="center">Aqui você pode fazer a alteração da sua senha</h2>

    <p align="center">Antes de tudo pedimos que não forneça sua senha para nenhum desconhecido, não nos responsabilizamos por qualquer danos ao seu cadastro.</p>

    <form method="POST" action="#">
        <font face=Tahoma size=2 color=black>
        <div align="center"> 
            <input class="form-control" style="width: 300px;" name="email" type="email" id="email" placeholder="Digite seu E-mail" size="40" autofocus required /></br>
            <input class="form-control" style="width: 300px;" name="senha" type="password" id="email" placeholder="Digite sua nova senha" size="40" autofocus required /></br>
            <button class = "btn btn-primary" type="submit" name="alterar" style="width: 200px;" > Alterar Senha </button>
            </p>
    </form>


    <p>Caso você tenha alterado a sua senha e o sistema indica que você não alterou sua senha,</p>
    <h4>Procure o Desenvolvedor ou o responsável pelo sistema.</h4>

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

    <!-- TRATATIVAS PHP - POSTS - GETS ENTRE OUTRAS -->
    <?php
    include './controles/conn.php';

    if (isset($_POST['alterar'])) {

        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $verificaEmail = $conn->prepare("SELECT * FROM usuario WHERE usuario_email = '$email'");
        $verificaEmail->execute();

        $conta = $verificaEmail->rowcount();

        if ($conta > 0) {
            $exclui = $conn->prepare("UPDATE usuario SET usuario_senha=:paramsenha where usuario_email='$email'");
            $exclui->bindValue(':paramsenha', $senha);
            $exclui->execute();
        }

        if ($exclui) {
            echo "<script> alert ('Senha alterada com Sucesso!!!'); location = 'index.php'</script>";
        } else {
            echo "<h3 style='color: green;'>Erro ao alterar sua senha, digite seu email correto.</h3>";
        }
    }
    ?>

    <!-- TRATATIVAS PHP - POSTS - GETS ENTRE OUTRAS -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>