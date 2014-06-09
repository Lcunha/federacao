<?php

include_once("../../controller/GameDataController.php");
include_once("../../persistence/GameDataDAO.php");

class GameDataControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $gameDataControllerTest;
     protected $gameDataDAOTest;
    
    protected function setUp() {
        $this->gameDataControllerTest = new GameDataController();
        $this->gameDataDAOTest = new GameDataDAO();
    }
    
    protected function tearDown() {
        unset($this->gameDataControllerTest);    
        unset($this->gameDataDAOTest);
    }
    
     public function testGetGameDataControllerTesNotNull() {
        $this->assertNotNull($this->gameDataControllerTest);
     }
    
     public function testGetGameDataDAOTesNotNull() {
        $this->assertNotNull($this->gameDataDAOTest);
    }

     public function testListAllGameData(){
        $return = $this->gameDataControllerTest->_listAllGameData();
        $result = $this ->gameDataDAOTest->listAllGameData();
        $this->assertEquals($result, $return);
    } 
   
       public function testDeleteGameData(){
        $return = $this->gameDataControllerTest->_deleteGameData(1);
        $result = $this ->gameDataDAOTest->deleteGameData(1);
        $this->assertEquals($result, $return);
    } 
}
?>
