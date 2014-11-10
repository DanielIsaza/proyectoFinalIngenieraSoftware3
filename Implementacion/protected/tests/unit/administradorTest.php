<?php
class administradorTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$administrador= new Administrador;
		$administrador->dni=12;
		$administrador->nombre="federico";
		$administrador->primerApellido="fernandez";
		$administrador->segundoApellido="Ortiz";
		$administrador->cargo="cargo1";
		$administrador->telFijo="12424";
		$administrador->email="correo@representante.com";

		$this->assertTrue($administrador->save());
	}

	public function testBuscar()
	{

		$administrador = new Administrador;		
		$aux = $administrador->findByPk(12);
		$this->assertNotNull($aux);
	}
}
?>