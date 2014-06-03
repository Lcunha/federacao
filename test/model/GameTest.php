<?php

include_once("/../../model/Game.php");
include_once("/../../persistence/GameDAO.php");

class GameTest extends PHPUnit_Framework_TestCase {

    protected $gameTest;
    
    protected function setUp() {
        $this->gameTest = new Game();
    }
   
     protected function tearDown() {
        unset($this->gameTest); 
    }
   
    public function testSetIdGame(){
        $this->gameTest->__setIdGame(2);
        $result = $this->gameTest->__getIdGame();
        $this->assertEquals(2,$result);
    }
        
    public function testSetGameAudience(){
        $this->gameTest->__setGameAudience(100);
        $result = $this->gameTest->__getGameAudience();
        $this->assertEquals(100,$result);
    }
    
    public function testSetGameCity(){
        $this->gameTest->__setGameCity('Brasilia');
        $result = $this->gameTest->__getGameCity();
        $this->assertEquals('Brasilia',$result);    
        
    }
    
    public function testSetGameLocation(){
        $this->gameTest->__setGameLocation('Gama');
        $result = $this->gameTest->__getGameLocation();
        $this->assertEquals('Gama',$result);           
    }
    
    public function testSetGameDate(){
        $this->gameTest->__setGameDate('2013-12-30');
        $result = $this->gameTest->__getGameDate();
        $this->assertEquals('2013-12-30',$result);    
    }
    
    public function testSetGameTime(){
        $this->gameTest->__setGameTime('23:59:00');
        $result = $this->gameTest->__getGameTime();
        $this->assertEquals('23:59:00',$result);
        
    }
    
    public function testSetGameDuration(){
        $this->gameTest->__setGameDuration(1);
        $result = $this->gameTest->__getGameDuration();
        $this->assertEquals(1,$result);
    }
    
    public function testSetTotal7Meters(){
        $this->gameTest->__setTotal7Meters(7);
        $result = $this->gameTest->__getTotal7Meters();
        $this->assertEquals(7,$result);       
    }
    
}