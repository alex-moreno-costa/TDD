<?php

namespace CDC\Loja\RH;

class DezOuVintePorCento implements RegraDeCalculo
{
    public function calcula(float $salario)
    {
        if ($salario > 3000) {
            return $salario * 0.8;
        }

        return $salario * 0.9;
    }
}