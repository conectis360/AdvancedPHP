<?php
require 'pdo.php';
require 'functions.php';

$cadastro = isset($_POST['cadastro']) ? $_POST['cadastro'] : NULL;
$nomeChave = getChave($cadastro);

$chave = (integer) (isset($_GET['chave']) ? $_GET['chave'] : NULL);

$pdo->exec("DELETE FROM $cadastro WHERE $nomeChave=$chave");

header('Location: $cadastro.php');