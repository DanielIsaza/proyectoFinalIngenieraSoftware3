<?php
class eventoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$evento = new Evento;
	 	$aux = $evento->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$evento = new Evento;
	 	$aux = $evento->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>