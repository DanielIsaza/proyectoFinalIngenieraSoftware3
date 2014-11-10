<?php
class generoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Genero = new Genero;
	 	$aux = $Genero->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Genero = new Genero;
	 	$aux = $Genero->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>