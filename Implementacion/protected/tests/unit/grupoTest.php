<?php
class grupoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Grupo = new Grupo;
	 	$aux = $Grupo->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Grupo = new Grupo;
	 	$aux = $Grupo->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>