<?php
namespace Entidade;

class Aluno extends EntidadeAbstrata {
    /*
    *
    * @var integer
    */
    protected $matricula;
    /*
    *
    * @var string
    */
    protected $nome;

    protected static $tabela = 'alunos';

    public static function getChave() {
        return 'matricula';
    }
}