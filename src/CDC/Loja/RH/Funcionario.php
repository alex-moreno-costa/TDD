<?php

namespace CDC\Loja\RH;


class Funcionario
{
    protected $nome;
    protected $salario;
    protected $cargo;

    public function __construct($nome, $salario, Cargo $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
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
    public function getSalario()
    {
        return $this->salario;
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
        return $this->cargo->getRegra()->calcula($this);
    }
}