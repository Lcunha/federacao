<?php

include_once (__APP_PATH.'/controller/CoachController.php');

class CoachViewTest extends PHPUnit_Framework_TestCase{

	protected $coachCOTest;

	protected function setUp() {
		$this->coachCOTest = new CoachController();
	}

	protected function tearDown() {
		unset($this->coachCOTest);
	}

	protected function testGetCoachControllerTestNotNull() {
		$this->assertNotNull($this->coachCOTest);
	}
}

?>