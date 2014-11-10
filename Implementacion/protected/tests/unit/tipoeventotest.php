<?php
class tipoeventotest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$TipoEvento = new TipoEvento;
	 	$aux = $TipoEvento->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$TipoEvento = new TipoEvento;
	 	$aux = $TipoEvento->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>