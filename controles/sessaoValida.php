<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
}
$id = $_SESSION['login'];
include 'conn.php';
$valida = $conn->prepare('SELECT * FROM usuario WHERE usuario_id= :paramid');
$valida->bindValue(':paramid', $id);
$valida->execute();
$row_usu_info = $valida->fetch();
