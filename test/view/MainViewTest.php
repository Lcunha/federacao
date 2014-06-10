<?php

include_once (__APP_PATH.'/controller/TeamController.php');
include_once (__APP_PATH.'/controller/PlayerController.php');
include_once (__APP_PATH.'/controller/CoachController.php');
include_once (__APP_PATH.'/controller/RefereeController.php');

class MainViewTest extends PHPUnit_Framework_TestCase{
	protected $playerCOTest;
	protected $teamCOTest
	protected $coachCOTest;
	protected $refereeCOTest;

	protected function setUp() {
		$this->playerCOTest = new PlayerController();
		$this->teamCOTest = new TeamController();
	}

	protected function tearDown() {
		unset($this->playerCOTest);
		unset($this->teamCOTest);
	}

	protected function testGetPlayerControllerTestNotNull() {
		$this->assertNotNull($this->playerCOTest);
	}

	protected function testGetTeamControllerTestNotNull() {
		$this->assertNotNull($this->teamCOTest);
	}

	protected function testGetCoachControllerTestNotNull() {
		$this->assertNotNull($this->coachCOTest);
	}

	protected function testGetRefereeControllerTestNotNull() {
		$this->assertNotNull($this->refereeCOTest);
	}
	
}

?>