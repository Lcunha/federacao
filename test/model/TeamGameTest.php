<?php

include_once("/../../model/TeamGame.php");
include_once("/../../persistence/GameDAO.php");

class TeamGameTest extends PHPUnit_Framework_TestCase {

    protected $teamGameTest;
    
    protected function setUp() {
        $this->teamGameTest = new TeamGame();
    }
   
     protected function tearDown() {
        unset($this->teamGameTest); 
     }
    
    public function testSetIdGame(){
	$this->teamGameTest->__setIdGame(5);
        $result = $this->teamGameTest->__getIdGame();
        $this->assertEquals(5,$result);
    }
    
    public function testSetIdTeam(){
        $this->teamGameTest->__setIdTeam(13);
        $result = $this->teamGameTest->__getIdTeam();
        $this->assertEquals(13,$result);
    }
}
