<?php
class representanteLegalTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$representante= new Representantelegal;
		$representante->dni=12;
		$representante->nombre="federico";
		$representante->primerApellido="fernandez";
		$representante->segundoApellido="Ortiz";
		$representante->direccion="direccion1";
		$representante->telFijo="12424";
		$representante->email="correo@representante.com";

		$this->assertTrue($representante->save());
	}

	public function testBuscar()
	{

		$representante= new Representantelegal;		
		$aux = $representante->findByPk(12);
		$this->assertNotNull($aux);
	}
}
?>