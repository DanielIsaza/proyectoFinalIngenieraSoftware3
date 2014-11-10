<?php
class departamentoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$departamento = new Departamento;
	 	$aux = $departamento->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$departamento = new Departamento;
	 	$aux = $departamento->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>