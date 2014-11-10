<?php
class redtest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Red = new Red;
	 	$aux = $Red->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Red = new Red;
	 	$aux = $Red->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>