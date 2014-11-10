<?php
class usuarioTest extends PHPUnit_Framework_TestCase
{
	public function testCreate()
	{
		$usuario = new Usuario;
		$usuario->login="usuario";
		$usuario->password=sha1("123");

		$this->assertTrue($usuario->save());
	}

	public function testBuscar()
	{
		$usuario = new Usuario;
		$aux = $usuario->findAll();
		$this->assertNotNull($aux);
	}
}
?>