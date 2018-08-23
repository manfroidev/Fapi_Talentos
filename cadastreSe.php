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
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </head>
    <body>
        <!-- cabecalho -->    
    <center>
        <div class="logo">
            <img class="imagem" src="./imagens/logoFAPI.png" >
        </div>
        <section id="cabecalho">
            <div class="cadastrar">
                <center>
                    <span class="acessar">Cadastre-se</span>
                </center>
                <br>
                <form name="cadastre-se" action="insertUsers.php" method="POST" class="needs-validation" novalidate >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="sobrenome" placeholder="SobreNome" name="sobreNome" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail - Alunos cursando cadastrar o email da Fapi" aria-describedby="inputGroupPrepend" required="required">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input list="listaTipoCadastro" type="text" name="tipoCadastro" class="form-control" id="tipoCadastro" placeholder="Tipo Cadastro" required="required">
                            <datalist id="listaTipoCadastro">
                                <option value="Aluno/Ex-Alunos">Aluno / Ex-Alunos</option>
                                <option value="Empresa">Empresas</option>
                            </datalist> 
                        </div>
                        <div class="form-group col-md-6">
                            <input list="cursando" type="text" name="cursando" class="form-control" id="tipoCadastro" placeholder="Cursando" required="required">
                            <datalist id="cursando">
                                <option value="Cursando">Cursando.</option>
                                <option value="Concluído">Concluído.</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
                    </div>
                    <div class = "form-group">
                        <div class = "form-check">
                            <input class = "form-check-input" type = "checkbox" name="termos" id = "invalidCheck" required>
                            <label class = "form-check-label" for = "invalidCheck">
                                Aceito os termos para que a Instituição de Ensino Fapi Pinhais<br> 
                                possa divulgar minha imagem para fins educacionais.
                            </label>
                            <div class = "invalid-feedback">
                                Aceite os termos antes de cadastrar seu usuario de Empresa.
                            </div>
                        </div>
                    </div>
                    <button class = "btn btn-primary" type = "submit" id = "cadastrar" name = "cadastrar" style = "width:277px;">Cadastrar</button>
                    <br>
                    <br>
                </form>
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