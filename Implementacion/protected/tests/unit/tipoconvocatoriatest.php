<?php
class tipoconvocatoriatest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$TipoConvocatoria = new TipoConvocatoria;
	 	$aux = $TipoConvocatoria->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$TipoConvocatoria = new TipoConvocatoria;
	 	$aux = $TipoConvocatoria->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>