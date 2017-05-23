<?php

namespace CDC\Loja\Carrinho;

require __DIR__ . '/../Test/TestCase.php';

use CDC\Loja\Produto\Produto;
use CDC\Loja\Test\TestCase;

class MaiorPrecoTest extends TestCase
{
    private $carrinho;

    public function setUp()
    {
        $this->carrinho = new CarrinhoDeCompras();

        parent::setUp();
    }

    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $this->assertEquals(0, $this->carrinho->maiorValor(), null, 0.0001);
    }

    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 1, 900.00));

        $this->assertEquals(900.00, $this->carrinho->maiorValor(), null, 0.0001);
    }

    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $this->carrinho->adiciona(new Produto("Fogão", 1, 1500.00));
        $this->carrinho->adiciona(new Produto("Máquina de lavar", 1, 750.00));

        $this->assertEquals(1500.00, $this->carrinho->maiorValor(), null, 0.0001);
    }
}