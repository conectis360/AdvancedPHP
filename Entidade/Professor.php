<?php
namespace Entidade;

class Professor extends EntidadeAbstrata {
    /*
    *
    *
    * @var integer
    */
    protected $codigo;
    /*
    *
    * @var string
    */
    protected $nome;

    protected static $tabela = 'professores';

    public static function getChave(){
        return 'codigo';
    }
}