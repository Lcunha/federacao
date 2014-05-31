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
    
}


?>
