<?php

namespace CDC\Loja\Produto;

class Produto
{
    private $nome;
    private $valorUnitario;
    private $quantidade;

    public function __construct($nome, $valorUnitario, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
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
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getValorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }
}