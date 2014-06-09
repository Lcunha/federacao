<?php

include_once("../../controller/PlayerController.php");
include_once("../../persistence/PlayerDAO.php");

class PlayerControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $playerControllerTest;
     protected $playerDAOTest;
    
    protected function setUp() {
        $this->playerControllerTest = new PlayerController();
        $this->playerDAOTest = new PlayerDAO();
    }
    
    protected function tearDown() {
        unset($this->playerControllerTest);    
        unset($this->playerDAOTest);
    }
    
     public function testGetPlayerControllerTesNotNull() {
        $this->assertNotNull($this->playerControllerTest);
     }
     
      public function testGetPlayerDAOTesNotNull() {
        $this->assertNotNull($this->playerDAOTest);
     }
}
?>
