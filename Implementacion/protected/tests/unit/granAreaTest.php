<?php
class granAreaTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$granArea = new GranArea;
	 	$aux = $granArea->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$granArea = new granArea;
	 	$aux = $granArea->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>