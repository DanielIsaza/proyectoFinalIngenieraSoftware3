<?php
class categoriaProductoTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$categoria = new CategoriaProducto;
	 	$aux = $categoria->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$categoria = new CategoriaProducto;
	 	$aux = $categoria->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>