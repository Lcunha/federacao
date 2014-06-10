<?php

include_once (__APP_PATH.'/controller/RefereeController.php');

class RefereeViewTest extends PHPUnit_Framework_TestCase{

	protected $refereeCOTest;

	protected function setUp() {
		$this->refereeCOTest = new RefereeController();
	}

	protected function tearDown() {
		unset($this->refereeCOTest);
	}

	protected function testGetRefereeControllerTestNotNull() {
		$this->assertNotNull($this->refereeCOTest);
	}
	
}

?>