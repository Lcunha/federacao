<?php
  
include_once("../../../federac/controller/DataTeamController.php");
include_once("../../../federac/persistence/DataTeamDAO.php");

class DataTeamControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamControllerTest;
     protected $dataTeamDAOTest;
    
    protected function setUp() {
        $this->dataTeamControllerTest = new DataTeamController();
        $this->dataTeamDAOTest = new DataTeamDAO();
    }
    
    protected function tearDown() {
        unset($this->dataTeamControllerTest);    
        unset($this->dataTeamDAOTest);
    }
    
    public function testGetDataTeamControllerTestNotNull() {
        $this->assertNotNull($this->dataTeamControllerTest);
     }
    
     public function testGetDataTeamDAOTesNotNull() {
        $this->assertNotNull($this->dataTeamDAOTest);
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
