<?php

include_once("../../../federac/model/DataTeam.php");
include_once("../../../federac/persistence/DataTeamDAO.php");

class DataTeamTest extends PHPUnit_Framework_TestCase{
    
    protected $dataTeamTest;
    
    protected function setUp() {
        $this->dataTeamTest = new DataTeam();
    }
   
     protected function tearDown() {
        unset($this->dataTeamTest); 
    }
 
     public function testSetIdDataTeam() {
        $this->dataTeamTest->__setIdDataTeam(2);
        $result = $this->dataTeamTest->__getIdDataTeam();
        $this->assertEquals(2,$result);
    }
    
     public function testSetIdTeam() {
        $this->dataTeamTest->__setIdTeam(3);
        $result = $this->dataTeamTest->__getIdTeam();
        $this->assertEquals(3,$result);
    }
    
     public function testSetTeamPoints() {
        $this->dataTeamTest->__setTeamPoints(4);
        $result = $this->dataTeamTest->__getTeamPoints();
        $this->assertEquals(4,$result);
    }
    
      public function testSetPlayerTeam() {
        $this->dataTeamTest->__setPlayerTeam('felipe');
        $result = $this->dataTeamTest->__getPlayerTeam();
        $this->assertEquals('felipe',$result);
    }
    
     public function testSetVictoryTeam() {
        $this->dataTeamTest->__setVictoryTeam(5);
        $result = $this->dataTeamTest->__getVictoryTeam();
        $this->assertEquals(5 ,$result);
    }
    
     public function testSetDrawTeam() {
        $this->dataTeamTest->__setDrawTeam(3);
        $result = $this->dataTeamTest->__getDrawTeam();
        $this->assertEquals(3 ,$result);
    }
    
     public function testSetLossTeam() {
        $this->dataTeamTest->__setLossTeam(1);
        $result = $this->dataTeamTest->__getLossTeam();
        $this->assertEquals(1 ,$result);
    }
    
     public function testSetAmountGoals() {
        $this->dataTeamTest->__setAmountGoals(7);
        $result = $this->dataTeamTest->__getAmountGoals();
        $this->assertEquals(7 ,$result);
    }
    
     public function testSetConcededGoals() {
        $this->dataTeamTest->__setConcededGoals(9);
        $result = $this->dataTeamTest->__getConcededGoals();
        $this->assertEquals(9 ,$result);
    }
    
}


?>
