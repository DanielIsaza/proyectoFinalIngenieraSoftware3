<?php
class tipofinanciaciontest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$TipoFinanciacion = new TipoFinanciacion;
	 	$aux = $TipoFinanciacion->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$TipoFinanciacion = new TipoFinanciacion;
	 	$aux = $TipoFinanciacion->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>