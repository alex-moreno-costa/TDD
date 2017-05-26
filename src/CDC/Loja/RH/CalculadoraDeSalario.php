<?php

namespace CDC\Loja\RH;


class CalculadoraDeSalario
{
    public function calculaSalario(Funcionario $funcionario)
    {
        return $funcionario->getCargo()->getRegra()->calcula($funcionario);
    }
}