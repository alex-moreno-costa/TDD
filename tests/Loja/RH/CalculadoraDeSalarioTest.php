<?php

namespace CDC\Loja\RH;

use PHPUnit_Framework_TestCase as PHPUnit;

class CalculadoraDeSalarioTest extends PHPUnit
{
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();

        $desenvolvedor = new Funcionario('André',1500.0, new Cargo('Desenvolvedor', new DezOuVintePorCento()));

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(1500*0.9,$salario,null,0.00001);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();

        $desenvolvedor = new Funcionario('André',4000.0, new Cargo('Desenvolvedor', new DezOuVintePorCento()));

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(4000*0.8,$salario,null,0.00001);
    }

    public function testCalculoSalarioParaDBAsComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();

        $dba = new Funcionario('André',500.0, new Cargo('DBA', new QuinzeOuVinteECincoPorCento()));

        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(500*0.85,$salario,null,0.00001);
    }

    public function testDeveCalcularSalarioParaDBAsComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();

        $dba = new Funcionario("Mauricio", 4500, new Cargo('Testador', new QuinzeOuVinteECincoPorCento()));
        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(4500 * 0.75, $salario, null, 0.00001);
    }
}