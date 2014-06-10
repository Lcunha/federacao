<?php

include_once (__APP_PATH.'/controller/GameDataController.php');

class AjaxGameDataViewTest extends PHPUnit_Framework_TestCase{
	
	protected $gameDataControllerTest;

	protected function setUp() {
		$this->gameDataControllerTest = new GameDataController();
	}

	protected function tearDown() {
		unset($this->gameDataControllerTest);
	}

	protected function testGetGameDataControllerTestNotNull() {
		$this->assertNotNull($this->gameDataControllerTest);
	}
}

?>