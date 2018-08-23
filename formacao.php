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
                    <?php include './menu/menuPrincipal.php'; ?>
                </div>    
            </div>
        </div>
        <!-- Fim Menu -->

        <!-- Inicio Corpo -->

   <center>
   
	 <div class = "col-sm-5">
      <br>
      <form method="post">
        <b>Nivel de Escolaridade<b>
		
        <select name="formacao" class="form-control mt-2">
          <option>Escolher</option>
          <option>Ensino Fundamental Incompleto</option>
          <option>Ensino Fundamental Completo</option>
          <option>Ensino Médio Incompleto</option>
          <option>Ensino Médio Completo</option>
          <option>Técnico/Pós-Médio Incompleto</option>
          <option>Técnico/Pós-Médio Completo</option>
          <option>Superior Incompleto</option>
          <option>Superior Completo</option>
	
        </select>
        <br><br>
		
        <b>Cursando</b>
		
        <select name="formacao" class="form-control mt-2">
          <option>Escolher</option>
          <option>Administração</option>
          <option>Análise e Desenvolvimento de Sistemas</option>
          <option>Arquitetura e Urbanismo</option>
          <option>Ciências Contábeis</option>
          <option>Construção de Edifícios</option>
          <option>Direito</option>
          <option>Engenharia Civil</option>
          <option>Gestão Ambiental</option>
          <option>Gestão de Recursos Humanos</option>
          <option>Gestão Pública</option>
          <option>Gestão de Segurança Privada</option>
          <option>Logística</option>
          <option>Pedagogia</option>
          <option>Processos Gerenciais</option>
          <option>Serviço Social</option>
          <?php
          // include "consulta_curso.php";
          ?>
        </select>
        <br><br>
        <b>Período(s)</b><br><br><br>
        <div style="float:left; margin-left:35%">
          <center>
            <input type="checkbox" name="1p" value="1p">   <b>1º Período</b><br><br>
            <input type="checkbox" name="2p" value="2p">   <b>2º Período</b><br><br>
            <input type="checkbox" name="3p" value="3p">   <b>3º Período</b><br><br>
            <input type="checkbox" name="4p" value="4p">   <b>4º Período</b><br><br>
            <input type="checkbox" name="5p" value="5p">   <b>5º Período</b><br><br>
          </center>
        </div>
        <div style="float:left;margin-left: 50px">
        <input type="checkbox" name="6p" value="6p">   <b>6º Período</b><br><br>
        <input type="checkbox" name="7p" value="7p">   <b>7º Período</b><br><br>
        <input type="checkbox" name="8p" value="8p">   <b>8º Período</b><br><br>
        <input type="checkbox" name="9p" value="9p">   <b>9º Período</b><br><br>
        <input type="checkbox" name="10p" value="10p">   <b>10º Período</b><br><br>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <b>Previsão de Término (mês/ano)</b>	
        <input type="text" name="mesano" placeholder="Digite a previsão de término" class="form-control mt-2">
        <br><br>
        <b>Se já possuí curso(s) superior(es), cite qual(is):</b><br><br>
		
        <input type="text" name="superior" placeholder="Digite seus cursos superiores" class="form-control mt-2"><br><br>
		
		 <input type="submit" value="Salvar" class="form-control mt-2, btn-outline-success"><br>
         <input type="submit" value="Cancelar" class="form-control mt-2, btn-outline-danger"><br>

	</div>
	

      </form>
    </center>
		
		
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