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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body style="background-color: #fff">

        <!-- Recebe retorno de login invalido -->
        <?php
        if (isset($_GET['loginInvalido'])) {

            echo "<script>alert('Usuário ou senha invalidos')</script>";
        }
        ?>
        <!-- Recebe retorno de login invalido -->


        <!-- cabecalho -->    
    <center>
        <div class="logo">
            <img class="imagem" src="./imagens/logoFAPI.png" >
            <br><br>
        </div>


        <section id="cabecalho">
            <div class="login">
                <center>
                    <span class="acessar">Login</span>
                </center>
                <form action="./controles/tratativas.php" method="POST">
                    <div class="form-group">
                        <strong><label class="login1" for="email">E-mail</label></strong>
                        <input style="width: 315px;" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu e-mail" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <strong><label class="login1" for="senha">Senha</label></strong>
                        <input style="width: 315px;" type="password" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha" required="required">
                    </div>
                    <button type="submit" id="entrar" class="btn btn-primary" name="entrar" style="width: 315px;">Entrar</button>
                </form>

                <a class="cadastre-se" href="cadastreSe.php"> Cadastre-se </a> 
                <a class="alterarSenha" href="recuperaSenha.php"> Esqueceu sua Senha? Clique Aqui </a> 

                <div class="ip">
                    <!-- PEGA IP DE ACESSO -->
                    <?php $ip = $_SERVER['REMOTE_ADDR']; ?>
                    <!-- PEGA IP DE ACESSO -->

                    <span style="">IP Acesso <?php echo $ip; ?></span>

                </div>
            </div>
        </section>
    </center>

    <!-- cabecalho -->


    <!-- corpo -->

    <!-- corpo -->

    <!-- TRATATIVAS PHP - POSTS - GETS ENTRE OUTRAS -->
    
    <!-- TRATATIVAS PHP - POSTS - GETS ENTRE OUTRAS -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>