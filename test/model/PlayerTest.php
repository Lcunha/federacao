<?php

include_once("../../model/Player.php");

class PlayerTest extends PHPUnit_Framework_TestCase{
    
    protected $playerTest;

    protected function setUp() {
        $this->playerTest = new Player();
    }
   
     protected function tearDown() {
        unset($this->playerTest);
    }
    
      public function testGetInstancePlayerTestNotNull() {
        $this->assertNotNull($this->playerTest);
    }
 
    public function testSetIdPlayer(){
        $this->playerTest->__setIdPlayer(6);
        $result = $this->playerTest->__getIdPlayer();
        $this->assertEquals(6,$result);
    }
    
    public function testSetIdTeam(){
        $this->playerTest->__setIdTeam(3);
        $result = $this->playerTest->__getIdTeam();
        $this->assertEquals(3,$result);
    }
    
     public function testSetPlayerName(){
        $this->playerTest->__setPlayerName('Matheus');
        $result = $this->playerTest->__getPlayerName();
        $this->assertEquals('Matheus',$result);
    }
    
     public function testSetBirthDatePlayer(){
        $this->playerTest->__setBirthDatePlayer('09/03/1994');
        $result = $this->playerTest->__getBirthDatePlayer();
        $this->assertEquals('09/03/1994',$result);
    }
    
    public function testSetCpfPlayer(){
        $this->playerTest->__setCpfPlayer('111111111-11');
        $result = $this->playerTest->__getCpfPlayer();
        $this->assertEquals('111111111-11',$result);
    }
    
    public function testSetPlayerNumber(){
        $this->playerTest->__setPlayerNumber('28');
        $result = $this->playerTest->__getPlayerNumber();
        $this->assertEquals('28',$result);
    }
}

?>