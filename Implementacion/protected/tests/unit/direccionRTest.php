<?php
class direccionRTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$direccion = new Direccionr;
		$direccion->direccion="direccion";
		$direccion->barrio="barrio";
		$direccion->telFijo="12341";
		$direccion->apartadoPostal="4312";
		$direccion->codPostal="23";
		$direccion->email="correo@direccion.com";
		$direccion->SitioWeb="www.persona.com";

		$this->assertTrue($direccion->save());
	}

	public function testBuscar()
	 {
		$direccion = new Direccionr;
	 	$aux = $direccion->findAll();
	 	$this->assertNotNull($aux);
	 }

}
?>