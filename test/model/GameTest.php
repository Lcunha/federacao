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
    /*
    public function __setGameDate($gameDate){
    }
    
    public function __setGameTime($gameTime){
    }
    
    public function __setGameDuration($gameDuration){
    }
    
    public function __setTotal7Meters($total7Meters){
    }
    */
}
