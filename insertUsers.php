<?php
    include './controles/conn.php';

    if (isset($_POST['cadastrar'])) {

        ## Recebe variaveis do cadastro de usuario.

        $nome = $_POST['nome'];
        $sobreNome = $_POST['sobreNome'];
        $email = $_POST['email'];
        $tipoCadastro = $_POST['tipoCadastro'];
        $cursando = $_POST['cursando'];
        $senha = md5($_POST['senha']);

        $nome = ucwords(strtolower($nome));
        $sobreNome = ucwords(strtolower($sobreNome));

        ## Verifica se ja tem email cadastrado

        $verificaEmail = $conn->prepare("SELECT * FROM usuario WHERE usuario_email = '$email'");
        $verificaEmail->execute();
        $verificaEmail = $verificaEmail->fetch();

        ## Faz o cadastro do usuário no banco de dados.

        if ($verificaEmail > 0) {
            echo "<script> alert('Usuário já Cadastrado')</script>";
        } elseif ($tipoCadastro == 'Aluno/Ex-Alunos') {
            $insert = $conn->prepare("INSERT INTO usuario VALUES('NULL', '$nome', '$sobreNome', '$email', '$tipoCadastro', '$cursando', '$senha', 1, 'Aceito o Termo', 1)");
            $insert->execute();
        } elseif ($tipoCadastro == 'Empresa') {
            $insert = $conn->prepare("INSERT INTO usuario VALUES('NULL', '$nome', '$sobreNome', '$email', '$tipoCadastro', null, '$senha', 3, 'Aceito o Termo', 1)");
            $insert->execute();
        } if ($insert) {
            echo "<script> alert('Usuário Cadastrado com Sucesso.')</script>";
        } else {
            echo "<script> alert('Erro ao Cadastrar Usuário')</script>";
        }
            echo "<script> window.location.href = 'index.php' </script>";
    }
    ?>
