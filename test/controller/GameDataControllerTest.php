<?php

include_once("../../../federac/controller/GameDataController.php");
include_once("../../../federac/persistence/GameDataDAO.php");
include_once("../../../federac/model/GameData.php");

class GameDataControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $gameDataControllerTest;
     protected $gameDataTest;
     protected $gameDataDAOTest;
    
    protected function setUp() {
        $this->gameDataTest = new GameData();
        $this->gameDataControllerTest = new GameDataController();
        $this->gameDataDAOTest = new GameDataDAO();
    }
    
    protected function tearDown() {
        unset($this->gameDataControllerTest);    
        unset($this->gameDataDAOTest);
        unset($this->gameDataTest);
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
