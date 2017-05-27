<?php

namespace CDC\Loja\RH;

class QuinzeOuVinteECincoPorCento implements RegraDeCalculo
{
    public function calcula(float $salario)
    {
        if ($salario < 2500) {
            return $salario * 0.85;
        }

        return $salario * 0.75;
    }
}