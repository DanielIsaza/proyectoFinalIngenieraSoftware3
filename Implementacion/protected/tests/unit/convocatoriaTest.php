<?php
class convocatoriaTest extends PHPUnit_Framework_TestCase
{
	 public function testBuscar()
	 {
	 	$convocatoria = new Convocatoria;
	 	$aux = $convocatoria->findAll();

	 	$this->assertNotNull($aux);
	 }

	 public function testBuscarPorLlavePrimaria()
	 {
	 	$convocatoria = new Convocatoria;
	 	$aux = $convocatoria->findAll();

	 	$this->assertNotNull($aux);
	 }
}
?>