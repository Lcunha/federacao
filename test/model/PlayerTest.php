<?php

include_once("/../../model/Player.php");

class PlayerTest extends PHPUnit_Framework_TestCase{
	
	protected $playerTest;

	protected function setUp() {
		$this->playerTest = new Player();
	}

	protected function tearDown(){
		unset($this->playerTest);
	}
}

?>