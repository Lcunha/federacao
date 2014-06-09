<?php

include_once("../../controller/TeamController.php");
include_once("../../persistence/TeamDAO.php");

class TeamControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $teamControllerTest;
     protected $teamDAOTest;
    
    protected function setUp() {
        $this->teamControllerTest = new TeamController();
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
    
     public function testListAllPlayersTeam(){
        $return = $this->teamControllerTest->_listAllPlayersTeam(2);
        $result = $this ->teamDAOTest->listAllPlayersTeam(2);
        $this->assertEquals($result, $return);
    }
    
    public function testListAllTeams(){
        $return = $this->teamControllerTest->_listAllTeams();
        $result = $this ->teamDAOTest->listAllTeams();
        $this->assertEquals($result, $return);
    }
    
      public function testAmountTeamsRecords(){
        $return = $this->teamControllerTest->_amountTeamsRecords();
        $result = $this ->teamDAOTest->amountTeamsRecords();
        $this->assertEquals($result, $return);
    }
    /*
      public function testListAllTeamsByPoints(){
        $return = $this->teamControllerTest->_listAllTeamsByPoints();
        $result = $this ->teamDAOTest->listAllTeamsByPoints();
        $this->assertEquals($result, $return);
    }
    */
}
?>
