<?php

namespace CDC\Loja\Carrinho;

require __DIR__ . '/../Test/TestCase.php';

use CDC\Loja\Produto\Produto;
use CDC\Loja\Test\TestCase;

class MaiorPrecoTest extends TestCase
{
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new CarrinhoDeCompras();

        $this->assertEquals(0, $carrinho->maiorValor(), null, 0.0001);
    }

    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));

        $this->assertEquals(900.00, $carrinho->maiorValor(), null, 0.0001);
    }

    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $carrinho->adiciona(new Produto("Fogão", 1, 1500.00));
        $carrinho->adiciona(new Produto("Máquina de lavar", 1, 750.00));

        $this->assertEquals(1500.00, $carrinho->maiorValor(), null, 0.0001);
    }
}