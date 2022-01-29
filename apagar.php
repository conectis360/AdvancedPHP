<?php
require 'pdo.php';

$matricula = (integer) (isset($_GET['matricula'])) ? $_GET ['matricuça'] : NULL;

$pdo->exec("DELETE FROM alunos WHERE matricula=$matricula");

header('Location: index.php');