<?php

namespace CDC\Loja\RH;

class Cargo
{
    private $nome;

    private $regra;

    public function __construct($nome, RegraDeCalculo $regra)
    {
        $this->nome = $nome;
        $this->regra = $regra;
    }

    public function getRegra() : RegraDeCalculo
    {
        return $this->regra;
    }

    public function getNome()
    {
        return $this->nome;
    }
}