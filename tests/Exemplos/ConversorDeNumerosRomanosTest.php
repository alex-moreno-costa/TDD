<?php

namespace CDC\Exemplos;

require __DIR__ . '/../../vendor/autoload.php';

use CDC\Exemplos\ConversorDeNumerosRomanos;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumerosRomanosTest extends PHPUnit
{
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converter('I');
        $this->assertEquals($numero, 1);
    }

    public function testDeveEntenderOSimboloV()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converter('V');
        $this->assertEquals($numero, 5);
    }

    public function testDeveEntedenOSimboloXXII()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converter('XXII');
        $this->assertEquals($numero, 22);
    }

    public function testDeveEntenderOSimboloIX()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converter('IX');
        $this->assertEquals($numero, 9);
    }

    public function testDeveEntenderOSimboloXXIV()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converter('XXIV');
        $this->assertEquals($numero, 24);
    }
}