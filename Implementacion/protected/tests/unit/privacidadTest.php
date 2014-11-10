<?php
class privacidadTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Privacidad = new Privacidad;
	 	$aux = $Privacidad->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Privacidad = new Privacidad;
	 	$aux = $Privacidad->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>