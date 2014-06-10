<?php

include_once ('../../../controller/DataTeamController.php');

class AjaxDataChampionshipTest extends PHPUnit_Framework_TestCase{

	protected $dataTeamControllerTest;

	protected function setUp() {
		$this->dataTeamControllerTest = new DataTeamController();
	}

	protected function tearDown() {
		unset($this->dataTeamControllerTest);
	}

	protected function testGetDataTeamControllerTestNotNull() {
		$this->assertNotNull($this->dataTeamControllerTest);
	}
}

?>