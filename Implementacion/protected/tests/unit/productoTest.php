<?php
class productoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Producto = new Producto;
	 	$aux = $Producto->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Producto = new Producto;
	 	$aux = $Producto->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>