<?php

include_once (__APP_PATH.'/controller/GameController.php');
include_once (__APP_PATH.'/controller/TimeController.php');

class GameViewTest extends PHPUnit_Framework_TestCase{

	protected $gameCOTest;
	protected $timeCOTest

	protected function setUp() {
		$this->gameCOTest = new GameController();
		$this->timeCOTest = new TimeController();
	}

	protected function tearDown() {
		unset($this->gameCOTest);
		unset($this->timeCOTest);
	}

	protected function testGetGameControllerTestNotNull() {
		$this->assertNotNull($this->gameCOTest);
	}

	protected function testGetTimeControllerTestNotNull() {
		$this->assertNotNull($this->timeCOTest);
	}
	
}

?>