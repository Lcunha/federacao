<?php

include_once("/../../persistence/DataTeamDAO.php");
include_once("/../../persistence/Connection.php");


class DataTeamDAOTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamDAOTest;
     protected $dataTeamTest;
    
    protected function setUp() {
        $this->dataTeamDAOTest = new DataTeamDAO();
        $this->dataTeamTest = new DataTeam(15, 1, 4, 13, 10, 1, 2, 10, 1);
    }
    
    protected function tearDown() {
        unset($this->dataTeamDAOTest);  
        unset($this->dataTeamTest);
    }
    
     public function testGetInstanceDataTeamDaoTestTestNotNull() {
        $this->assertNotNull($this->dataTeamDAOTest);
    }
    
      public function testGetInstanceDataTeamTestNotNull() {
        $this->assertNotNull($this->dataTeamTest);
    }

    public function testDeleteDataTeam(){
         $result = $this->dataTeamDAOTest->deleteDataTeam(14);
         $this->assertTrue($result);  
    }
  
     public function testInsertDataTeam() {
        $retorno = $this->dataTeamDAOTest->insertDataTeam($this->dataTeamTest);
        $this->assertTrue($retorno);
    }    
    
     public function testUpdateDataTeam() {
        $retorno = $this->dataTeamDAOTest->updateDataTeam($this->dataTeamTest);
        $this->assertTrue($retorno);
    }    
}