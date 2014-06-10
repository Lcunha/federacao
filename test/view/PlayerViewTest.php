<?php

include_once (__APP_PATH.'/controller/PlayerController.php');

class PlayerViewTest extends PHPUnit_Framework_TestCase{

	protected $playerCOTest;

	protected function setUp() {
		$this->playerCOTest = new PlayerController();
	}

	protected function tearDown() {
		unset($this->playerCOTest);
	}

	protected function testGetPlayerControllerTestNotNull() {
		$this->assertNotNull($this->playerCOTest);
	}
	
}

?>