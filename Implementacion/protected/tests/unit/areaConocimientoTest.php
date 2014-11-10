<?php
class areaConocimientoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$area = new AreaConocimiento;
	 	$aux = $area->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$area = new AreaConocimiento;
	 	$aux = $area->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>