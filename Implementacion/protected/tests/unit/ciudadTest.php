ciudad<?php
class ciudadTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$ciudad = new Ciudad;
	 	$aux = $ciudad->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$ciudad = new Ciudad;
	 	$aux = $ciudad->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>