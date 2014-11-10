<?php
class paisTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Pais = new Pais;
	 	$aux = $Pais->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Pais = new Pais;
	 	$aux = $Pais->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>