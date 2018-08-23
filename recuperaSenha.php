
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
                        <?php include 'menu/usuarioInformacoesRecuperaSenha.php'; ?>
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
        </br>

    <legend align="center">Bem Vindo Usuário</legend>

    <h2  align="center">Aqui você pode fazer a recuperação da sua senha</h2>

    <p align="center">Antes de tudo pedimos que nos informe seu e-mail, para que possamos procurar seu e-mail em nossa base de dados</p>

    <form method="POST" action="#">
        <font face=Tahoma size=2 color=black><br>
        <div align="center"><b></b> 
            <input class="form-control" style="width: 300px;" name="email" type="email" id="email" placeholder="Informe seu E-mail" size="40" autofocus required /></br>
            <button class = "btn btn-primary" type="submit" name="enviar" style="width: 200px;" > Enviar </button>
            </p>
    </form>


    <p>Caso você tenha cadastro e o sistema indica que você não tem um email cadastrado</p>
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

    $email = $_POST['email'];

    if (isset($_POST['enviar'])) {

        $verificaEmail = $conn->prepare("SELECT * FROM usuario WHERE usuario_email = '$email'");
        $verificaEmail->execute();
           
        $conta = $verificaEmail->rowcount();
        
        if ($conta > 0 ) {
            require_once("./PHPMailer_5.2.0/class.phpmailer.php");

            $mail = new PHPMailer(true);
            $mail->charSet = 'UTF-8';

            $mail->IsSMTP(); // Define que a mensagem ser� SMTP

            try {
                $mail->SMTPAuth = true;  // Usar autentica��o SMTP (obrigat�rio para smtp.seudom�nio.com.br)
                $mail->Host = 'smtp.quanticait.com.br'; // Endere�o do servidor SMTP (Autentica��o, utilize o host smtp.seudom�nio.com.br)
                $mail->Port = 587; //  Usar 587 porta SMTP
                $mail->Username = 'alex.silva@quanticait.com.br'; // Usu�rio do servidor SMTP (endere�o de email)
                $mail->Password = 'alex@2018'; // Senha do servidor SMTP (senha do email usado)
                $mail->SetFrom('alex.silva@quanticait.com.br', 'Fapi Talentos'); //Seu e-mail
                $mail->Subject = utf8_decode('Recuperação de Senha'); //Assunto do e-mail
                $mail->AddAddress($email); //Define o remetente
                $msg = "Olá usuário, você solicitou a recuperação de senha para o sistema Fapi-Talentos.\n \n"; //Define a mensagem do corpo do email
                $msg .= "Segue link abaixo para alteração de sua senha. \n \n";
                $msg .= "http://www.fapitalentos.quanticait.com.br/alterarSenha.php";
                $mail->MsgHTML($msg); //Corpo do email 
                $mail->Send();
                echo "<script> alert ('E-mail enviado com Sucesso!!!'); location = 'index.php'</script>";
            } catch (phpmailerException $e) {
                echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
            }
        } else {
            echo "<h3 style='color: green;'>E-mail não cadastrado em nosso banco de dados, Digite o E-mail correto.</h3>";
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