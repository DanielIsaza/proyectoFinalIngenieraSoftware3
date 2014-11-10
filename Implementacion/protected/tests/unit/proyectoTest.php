<?php
class proyectoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Proyecto = new Proyecto;
	 	$aux = $Proyecto->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Proyecto = new Proyecto;
	 	$aux = $Proyecto->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>