<?php
if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    include 'conn.php';
    $valida = $conn->prepare('SELECT * FROM usuario WHERE usuario_email=:paramusuario AND usuario_senha=:paramsenha');
    $valida->bindValue(':paramusuario', $email);
    $valida->bindValue(':paramsenha', $senha);
    $valida->execute();
    if ($valida->rowcount() == 0) {
        header('location:../index.php?loginInvalido=1');
    } else {
        include 'sessao.php';
        echo "<script>window.location='../home.php'</script>";
    }
}

if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    echo "<script> window.location='../index.php';</script>";
}

