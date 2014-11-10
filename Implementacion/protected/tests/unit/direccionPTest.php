<?php
class direccionPTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$direccion = new Direccionp;
		$direccion->direccion="direccion";
		$direccion->barrio="barrio";
		$direccion->telFijo="12341";
		$direccion->apartadoPostal="4312";
		$direccion->codigoPostal="23";
		$direccion->email="correo@direccionp.com";
		$direccion->sitioWeb="www.persona.com";

		$this->assertTrue($direccion->save());
	}

	public function testBuscar()
	 {
		$direccion = new Direccionp;
	 	$aux = $direccion->findAll();
	 	$this->assertNotNull($aux);
	 }

}
?>