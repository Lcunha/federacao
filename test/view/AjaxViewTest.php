<?php

include_once (__APP_PATH.'/controller/TeamController.php');

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
}

?>