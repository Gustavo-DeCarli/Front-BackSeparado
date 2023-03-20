<?php
json_decode($_POST['nome'], $_POST['user']);
require "funcoes.php";
$s = New funcoes;
$s->setId(null);
$s->setNome($_POST['nome']);
$s->setUser($_POST['user']);
$s->addDados();
header('Location: ../index.html');
?>