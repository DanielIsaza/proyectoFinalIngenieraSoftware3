<?php
class organizacionTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$organizacion = new Organizacion;
		$organizacion->nit=1;
		$organizacion->nombre="empresa";
		$organizacion->sigla="Em";
		$organizacion->telefono="1232";
		$organizacion->email="correo1@empresa.com";
		$organizacion->sitioWeb="www.empresa.org";

		$this->assertTrue($organizacion->save());
	}

	public function testBuscar()
	 {
		$organizacion = new Organizacion;
	 	$aux = $organizacion->findByPk(1);
	 	$this->assertNotNull($aux);
	 }
}
?>