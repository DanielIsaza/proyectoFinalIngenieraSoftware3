<?php
class tipodocumentotest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$TipoDocumento = new TipoDocumento;
	 	$aux = $TipoDocumento->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$TipoDocumento = new TipoDocumento;
	 	$aux = $TipoDocumento->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>