<?php

namespace CDC\Loja\RH;

class Cargo
{
    private $nome;

    private $salarioBruto;

    private $regra;

    public function __construct($nome, $salarioBruto, RegraDeCalculo $regra)
    {
        $this->nome = $nome;
        $this->regra = $regra;
        $this->salarioBruto = $salarioBruto;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalarioBruto()
    {
        return $this->salarioBruto;
    }

    public function getSalarioLiquido()
    {
        return $this->regra->calcula($this->salarioBruto);
    }
}