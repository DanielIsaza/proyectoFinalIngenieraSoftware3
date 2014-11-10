<?php
class personaTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate()
	 {
	 	$persona= new Persona;
	 	$persona->dni=3;
	 	$persona->nombre="danilo";
	 	$persona->primerApellido="Perez";
	 	$persona->segundoApellido="Fernandez";
	 	$persona->fechaNacimiento="1993-11-11";

	 	$this->assertTrue($persona->save());
	 }

	 public function testBuscar()
	 {
	 	$persona = new Persona;
	 	$aux = $persona->findByPk(1);
	 	$this->assertNotNull($aux);
	 }
}
?>