<?php
include_once dirname(__FILE__).'/../../controllers/personaController.php';
class personaTest extends WebTestCase
{
	protected $personaController;

	protected function setUp()
	{
		parent::setUp();
		$this->personaController = new personaController;
	}

	public function testIndex()
	{
		$this->personaController->actionIndex();
		$this->assertTextPresent('Persona');
	}

	public function testView()
	{
		$this->personaController->actionView();
		$this->assertTextPresent('Persona');
	}

	public function testLoadModel()
	{
		$aux = $this->loadModel(1);
		$this->assertTrue(!empty($aux));
	}
}
?>