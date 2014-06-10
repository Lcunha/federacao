<?php

include_once (__APP_PATH.'/controller/TeamGameController.php');

class TeamGameViewTest extends PHPUnit_Framework_TestCase{

	protected $teamGameCOTest;

	protected function setUp() {
		$this->teamGameCOTest = new TeamGameController();
	}

	protected function tearDown() {
		unset($this->teamGameCOTest);
	}

	protected function testGetTeamGameControllerTestNotNull() {
		$this->assertNotNull($this->teamGameCOTest);
	}
	
}

?>