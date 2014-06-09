<?php

include_once("/../../persistence/TeamDAO.php");
include_once("/../../persistence/Connection.php");


class DataTeamDAOTest extends PHPUnit_Framework_TestCase{
  
     protected $teamDAOTest;
     protected $teamTest;
    
    protected function setUp() {
        $this->teamDAOTest = new TeamDAO();
        $this->teamTest = new Team();
    }
    
    protected function tearDown() {
        unset($this->teamDAOTest);  
        unset($this->teamTest);
    }
    
     public function testGetInstanceTeamDaoTestTestNotNull() {
        $this->assertNotNull($this->teamDAOTest);
    }
    
      public function testGetInstanceTeamTestTestNotNull() {
        $this->assertNotNull($this->teamTest);
    }
}
    
?>
