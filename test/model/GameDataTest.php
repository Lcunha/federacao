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
    
    public function testSetIdPlayer() {
        $this->gameDataTest->__setIdPlayer(3);
        $result = $this->gameDataTest->__getIdPlayer();
        $this->assertEquals(3,$result);
    }
   
    public function testSetIdTimePlay() {
        $this->gameDataTest->__setIdTimePlay(5);
        $result = $this->gameDataTest->__getIdTimePlay();
        $this->assertEquals(5,$result);
    }
    
    public function testSetAmountWarning() {
        $this->gameDataTest->__setAmountWarning(98);
        $result = $this->gameDataTest->__getAmountWarning();
        $this->assertEquals(98,$result);
    }
    
    public function testSetAmountPunishment() {
        $this->gameDataTest->__setAmountPunishment(7);
        $result = $this->gameDataTest->__getAmountPunishment();
        $this->assertEquals(7,$result);
    }
    
     public function testSetAmountDisqualification() {
        $this->gameDataTest->__setAmountDisqualification(97);
        $result = $this->gameDataTest->__getAmountDisqualification();
        $this->assertEquals(97,$result);
    }
    
     public function testSetAmountReports() {
        $this->gameDataTest->__setAmountReports(1);
        $result = $this->gameDataTest->__getAmountReports();
        $this->assertEquals(1,$result);
    }
    
    public function testSetGameGoals() {
        $this->gameDataTest->__setGameGoals(11);
        $result = $this->gameDataTest->__getGameGoals();
        $this->assertEquals(11,$result);
    }
}  
?>
