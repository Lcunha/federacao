<?php

include_once("/../../model/Player.php");

class TeamTest extends PHPUnit_Framework_TestCase{

	protected $teamTest;

	protected function setUp() {
		$this->teamTest = new Team();
	}

	protected function tearDown() {
		unset($this->teamTest);
	}
	
}
?>