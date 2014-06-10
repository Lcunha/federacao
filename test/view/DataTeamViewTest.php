<?php

include_once (__APP_PATH.'/controller/DataTeamController.php');

class DataTeamViewTest extends PHPUnit_Framework_TestCase{
	
	protected $dataTeamCOTest;

	protected function setUp() {
		$this->dataTeamCOTest = new DataTeamController();
	}

	protected function tearDown() {
		unset($this->dataTeamCOTest);
	}

	protected function testGetDataTeamControllerTestNotNull() {
		$this->assertNotNull($this->dataTeamCOTest);
	}
	
}

?>