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
		<form action="" name="f1">
<div class="center">
    

        <div class = "col-sm-5">

            <b>Nome Completo:</b>
            <input class="form-control mt-2" type="text" name = "nome"><br>

            <b>Gênero:</b><br>
            <label><input type="radio" name = "genero" class="for-control mt-2"> Masculino</label> &nbsp&nbsp&nbsp&nbsp
            <label><input type="radio" name = "genero" class="for-control mt-2"> Feminino</label><br><br>

            <b>Data de nacimento :</b>
            <input class="form-control mt-2" type="text" name = "data_nacimento"><br>

            <b>Documento CPF:</b>
            <input class="form-control mt-2" type="text" name = "cpf"><br>

            <b>Documento RG:</b>
            <input class="form-control mt-2" type="text" name = "rg"><br>

            <b>Telefone Principal:</b>
            <input class="form-control mt-2" type="text" name = "telefonePrincipal"><br>

            <b>Telefone Secundário:</b>
            <input class="form-control mt-2" type="text" name = "telefoneSecundario"><br>

            <b>Estado Civil:</b><br>

            <label><input type="radio" name = "estadocivil" class="for-control mt-2"> Solteiro(a) </label>&nbsp&nbsp&nbsp&nbsp
            <label><input type="radio" name = "estadocivil" class="for-control mt-2"> Casado(a) </label><br>
            <label><input type="radio" name = "estadocivil" class="for-control mt-2"> Separado(a) </label>&nbsp&nbsp&nbsp&nbsp
            <label><input type="radio" name = "estadocivil" class="for-control mt-2"> Divorciado(a) </label>&nbsp&nbsp&nbsp&nbsp<br>
            <label><input type="radio" name = "estadocivil" class="for-control mt-2"> Viúvo(a) </label>&nbsp&nbsp&nbsp&nbsp<br><br>

            <b>Endereço:</b>

            <input placeholder="CEP" class="form-control mt-2" name="cep" type="text" id="cep" value=""  maxlength="9">

            <input placeholder="RUA" name="rua" type="text" id="rua" class="form-control mt-2"/>

            <input placeholder="NUMERO" name="numero" type="text"  class="form-control mt-2" />

            <input placeholder="COMPLEMENTO" name="complemento" type="text"  class="form-control mt-2" />

            <input placeholder="BAIRRO" name="bairro" type="text" id="bairro" class="form-control mt-2"/>

            <input placeholder="CIDADE" name="cidade" type="text" id="cidade" class="form-control mt-2" />

            <input placeholder="UF" name="uf" type="text" id="uf" class="form-control mt-2" /><br>

            <b>E-mail:</b>
            <input class="form-control mt-2" type="text" name = "email1" id="email1" onblur="valida_form()"><br>

            <b>Confirme o e-mail:</b>
            <input class="form-control mt-2" type="email" name = "email12" id="email2"><br>

            <b>Link das redes sociais:</b>
            <input placeholder="FACEBOOK" class="form-control mt-2" type="text" name = "face"><br>

            <input placeholder="LINKEDIN" class="form-control mt-2" type="text" name = "linkedin"><br>

            <b>Possui Deficiências:</b><br>
                <select id="cliente" onchange="optionCheck()" class="form-control mt-2">
                    <option value="cliente">POSSUI DEFICIENCIA</option>
                    <option value="sim">SIM</option>
                    <option value="nao">NÃO</option>
                </select><br><BR>
                <div id="codigo" style="display: none;" class="form-control mt-2" >
                   <label><input type="checkbox" name="auditivo">ADUTITIVO</label>
                    <label><input type="checkbox" name="visual">  VISUAL</label> <br><br>
                    <label><input type="checkbox" name="motora">  MOTORA</label>
                    <label><input type="checkbox" name="outro" id="outro">   OUTROS </label><br>
                    <textarea class="form-control mt-2" cols="35" rows="3" name="msg" placeholder="Outros tipos de deficiencias "></textarea><br>
                </div>

            <b>Usuário:</b>
            <input class="form-control mt-2" type="text" name = "usuario"><br>

            <b>Senha:</b>
            <input class="form-control mt-2" type="password" name = "senha1" id="senha1"><br>

            <b>Confirmar Senha:</b>
            <input class="form-control mt-2" type="password" name = "senha2" id="senha2" onblur="validaSenha()"><br>

            <input type="submit" value="Salvar" class="form-control mt-2, btn-outline-success"><br>
            <input type="submit" value="Cancelar" class="form-control mt-2, btn-outline-danger"><br>

        </div>
        </div>

        </div>
    </div>
</form>
		
		
		</center>




		
		
		
		
		
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


        <script type="text/javascript">
            function optionCheck(){
                var option = document.getElementById("cliente").value;
                if(option == "sim"){
                    document.getElementById("codigo").style.display ="block";
                }


            }
        </script>


    </body>
</html>