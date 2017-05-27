<?php

namespace CDC\Loja\RH;

class Funcionario
{
    protected $nome;
    protected $cargo;

    public function __construct($nome, Cargo $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getSalarioBruto()
    {
        return $this->cargo->getSalarioBruto();
    }

    /**
     * @return mixed
     */
    public function getCargo() : Cargo
    {
        return $this->cargo;
    }

    public function getSalarioLiquido()
    {
        return $this->cargo->getSalarioLiquido();
    }
}