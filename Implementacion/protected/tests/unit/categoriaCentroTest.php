<?php
class categoriaCentroTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$centro = new Centro;
	 	$aux = $centro->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$centro = new Centro;
	 	$aux = $centro->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>