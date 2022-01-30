<?php

/*
* Retorna o nome da chave de um cadastro
* @param string $cadastro
* @return string|NULL
*/
function getCadastro(){
    return (isset($_GET['cadastro'])) ? $_GET['cadastro'] : $_POST['cadastro'];
}

function getEntidade(){
    $cadastro = getCadastro();
    $entidade = ($cadastro == 'alunos' ? 'Aluno' : 'Professor');
    return 'Entidade\\' . $entidade;
}

function autoload($className) {
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
}

spl_autoload_register('autoload');