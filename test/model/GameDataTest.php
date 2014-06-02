<?php

include_once("../../../federac/model/GameData.php");
include_once("../../../federac/persistence/GameDataDAO.php");

class GameDataTest extends PHPUnit_Framework_TestCase{
    
    protected $gameDataTest;
    
    protected function setUp() {
        $this->gameDataTest = new GameData();
    }
   
     protected function tearDown() {
        unset($this->gameDataTest); 
    }
 
     public function testSetIdGameData() {
        $this->gameDataTest->__setIdGameData(2);
        $result = $this->gameDataTest->__getIdGameData();
        $this->assertEquals(2,$result);
    }
   
}  
?>
