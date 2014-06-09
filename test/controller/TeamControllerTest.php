<?php

include_once("../../controller/TeamController.php");
include_once("../../persistence/TeamDAO.php");

class TeamControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $teamControllerTest;
     protected $teamDAOTest;
    
    protected function setUp() {
        $this->teamControllerTest = new TeamControllerTest();
        $this->teamDAOTest = new TeamDAO();
    }
    
    protected function tearDown() {
        unset($this->teamControllerTest);    
        unset($this->teamDAOTest);
    }
    
     public function testGetTeamControllerTesNotNull() {
        $this->assertNotNull($this->teamControllerTest);
     }
    
     public function testGetTeamDAOTesNotNull() {
        $this->assertNotNull($this->teamDAOTest);
    }
}
?>
