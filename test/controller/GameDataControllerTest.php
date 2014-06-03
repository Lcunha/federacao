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
/*
     public function testListAllGames(){
        $return = $this->gameDataControllerTest->_listAllGame();
        $result = $this ->dataTeamDAOTest->listAllGame();
        $this->assertEquals($result, $return);
    } */

}
?>
