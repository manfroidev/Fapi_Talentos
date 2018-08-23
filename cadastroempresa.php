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
		
		<form action = "" method ="POST">
		</br>
		 <div class = "col-sm-5">
		
			<b>Nome da Empresa:
            <input class="form-control mt-2" type="text" name = "nome_empresa"><br>
			CNPJ:
            <input class="form-control mt-2" type="text" name = "cnpj"><br>
			Telefone para Contato 1:
            <input class="form-control mt-2" type="text" name = "tel_1"><br>
			<b>Telefone para Contato 2:</b>
            <input class="form-control mt-2" type="text" name = "tel_2"><br>
			Endereço:
            <input class="form-control mt-2" type="text" name = "endereco"><br>
			Horário de Trabalho:
            <input class="form-control mt-2" type="text" name = "horario_trabalho"><br>
			Responsável pela Empresa:
            <input class="form-control mt-2" type="text" name = "responsavel_empresa"><br>
			Ramo de Atividade:<br>
            <textarea rows="2" cols="21" class="form-control mt-2" >Escreva o ramo de atividade aqui...</textarea><br>		
			
			   <input type="submit" value="Salvar" class="form-control mt-2, btn-outline-success"><br>
            <input type="submit" value="Cancelar" class="form-control mt-2, btn-outline-danger"><br>
		</form>
		</div>
			</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		</center>
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