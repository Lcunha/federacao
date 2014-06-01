<?php
  
include_once("../../../federac/controller/DataTeamController.php");
include_once("../../../federac/persistence/DataTeamDAO.php");
include_once("../../../federac/model/DataTeam.php");

class DataTeamControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamControllerTest;
     protected $dataTeamTest;
     protected $dataTeamDAOTest;
    
    protected function setUp() {
        $this->dataTeamTest = new DataTeam();
        $this->dataTeamControllerTest = new DataTeamController();
        $this->dataTeamDAOTest = new DataTeamDAO();
    }
    
    protected function tearDown() {
        unset($this->dataTeamControllerTest);    
        unset($this->dataTeamTest);
        unset($this->dataTeamDAOTest);
    }

     public function testListAllData(){
        $return = $this->dataTeamControllerTest->_listAllData();
        $result = $this ->dataTeamDAOTest->listAllDataTeam();
        $this->assertEquals($result, $return);
    }
    
    public function testDeleteDataTeam(){
        $return = $this->dataTeamControllerTest->_deleteDataTeam(1);
        $result = $this ->dataTeamDAOTest->deleteDataTeam(1);
        $this->assertEquals($result, $return);
    }
    
    /*
     public function testInsertDataTeam(){
        $return = $this->dataTeamControllerTest->_insertDataTeam(4);
        $result = $this ->dataTeamDAOTest->insertDataTeam(4);
        $this->assertEquals($result, $return);
    }
    */
    
}
    
?>
