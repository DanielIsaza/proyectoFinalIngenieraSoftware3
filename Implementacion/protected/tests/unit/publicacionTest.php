<?php
class publicacionTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$Publicacion = new Publicacion;
	 	$aux = $Publicacion->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$Publicacion = new Publicacion;
	 	$aux = $Publicacion->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>