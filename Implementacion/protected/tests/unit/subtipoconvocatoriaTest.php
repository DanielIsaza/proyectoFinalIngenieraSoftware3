<?php
class subtipoconvocatoriatest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$SubtipoConvocatoria = new SubtipoConvocatoria;
	 	$aux = $SubtipoConvocatoria->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$SubtipoConvocatoria = new SubtipoConvocatoria;
	 	$aux = $SubtipoConvocatoria->findByPk(1);

	 	$this->assertNotNull($aux);
	 }
}
?>