<?php

include_once("../../controller/PlayerController.php");
include_once("../../persistence/PlayerDAO.php");

class PlayerControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $playerControllerTest;
     protected $playerDAOTest;
     protected $playerTest;
    
    protected function setUp() {
        $this->playerControllerTest = new PlayerController();
        $this->playerDAOTest = new PlayerDAO();
        $this->playerTest = new Player(2, 2, 'Fernando', '3-09-90',  
                                        '847892-40', '9992-2388');
    }
    
    protected function tearDown() {
        unset($this->playerControllerTest);    
        unset($this->playerDAOTest);
        unset($this->playerTest);
    }
    
     public function testGetPlayerControllerTesNotNull() {
        $this->assertNotNull($this->playerControllerTest);
     }
     
      public function testGetPlayerDAOTesNotNull() {
        $this->assertNotNull($this->playerDAOTest);
     }
     
      public function testListAllPlayers(){
        $return = $this->playerControllerTest->_listAllPlayers();
        $result = $this ->playerDAOTest->listAllPlayers();
        $this->assertEquals($result, $return);
    } 
    
       public function testAmountPlayersRecords(){
        $return = $this->playerControllerTest->_amountPlayersRecords();
        $result = $this ->playerDAOTest->amountPlayersRecords();
        $this->assertEquals($result, $return);
    } 
}
?>
