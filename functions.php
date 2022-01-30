<?php

/*
* Retorna o nome da chave de um cadastro
* @param string $cadastro
* @return string|NULL
*/
function getChave($cadastro)
{
    switch($cadastro) {
        case 'alunos':
            return 'matricula';
        case 'professores':
            return 'codigo';
    }
    return NULL;
}