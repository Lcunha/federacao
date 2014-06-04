<?php

include_once("/../../persistence/DataTeamDAO.php");
include_once("/../../model/DataTeam.php");

class DataTeamDAOTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamDAOTest;
     protected $dataTeamTest;
    
    protected function setUp() {
        $this->dataTeamDAOTest = new DataTeamDAO();
        $this->dataTeamTest = new DataTeam(10, 9, 8, 'time', 8, 1, 1, 1, 6);
    }
    
    protected function tearDown() {
        unset($this->dataTeamDAOTest);    
    }

    public function testDeleteDataTeam(){
         $result = $this->dataTeamDAOTest->deleteDataTeam(2);
         $this->assertNull($result);  
    }
    
     public function testInsertDataTeam() {
        $retorno = $this->dataTeamDAOTest->insertDataTeam($this->dataTeamTest);
        $this->assertTrue($retorno);
    }    
    /*
     public function testInsertDataTeam(){
        $result = $this->dataTeamDAOTest->insertDataTeam(null);
        $this->assertFalse($result);  
     }  
     */

    
    
    
    
}