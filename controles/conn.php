<?php
header('Content-Type: text/html; charset=utf-8');
$conn = new PDO('mysql:host=localhost;dbname=fapi_talentos', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>
