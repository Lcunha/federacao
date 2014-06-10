<?php

include_once (__APP_PATH.'/controller/GameDataController.php');

class GameDataViewTest extends PHPUnit_Framework_TestCase{

	protected $gameDataCOTest;

	protected function setUp() {
		$this->gameDataCOTest = new GameDataController();
	}

	protected function tearDown() {
		unset($this->gameDataCOTest);
	}

	protected function testGetGameDataControllerTestNotNull() {
		$this->assertNotNull($this->gameDataCOTest);
	}
	
}

?>