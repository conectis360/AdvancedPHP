<?php
require 'pdo.php'; 
$matricula = (integer) (isset($_GET['matricula']) ? $_GET['matricula']: NULL);

isset($matricula) ? $matricula : null;

if (isset($matricula)) {
    $result = $pdo->query("Select nome from alunos where matricula=$matricula"); 
}else {
    echo 'A matrícula não foi encontrada';
}

$nome = $result->fetchColumn();