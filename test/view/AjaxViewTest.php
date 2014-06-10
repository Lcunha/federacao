<?php

include_once ('../../../controller/TeamController.php');

class AjaxViewTest extends PHPUnit_Framework_TestCase{
	
	protected $teamControllerTest;

	protected function setUp() {
		$this->teamControllerTest = new TeamController();
	}

	protected function tearDown() {
		unset($this->teamControllerTest);
	}

	protected function testGetTeamControllerTestNotNull() {
		$this->assertNotNull($this->teamControllerTest);
	}

	protected function testArrayTimeData() {
		return true;
	}

	protected function testIdActualTimeData() {
		return true;
	}

}

?>