<?php

include_once("../../../federac/controller/GameDataController.php");
include_once("../../../federac/persistence/GameDataDAO.php");
include_once("../../../federac/model/GameData.php");

class GameDataControllerTest extends PHPUnit_Framework_TestCase{
  
     protected $gameDataControllerTest;
     protected $gameDataTest;
     protected $gameDataDAOTest;
    
    protected function setUp() {
        $this->gameDataTest = new DataTeam();
        $this->gameDataControllerTest = new DataTeamController();
        $this->gameDataDAOTest = new DataTeamDAO();
    }
    
    protected function tearDown() {
        unset($this->gameDataControllerTest);    
        unset($this->gameDataDAOTest);
        unset($this->gameDataTest);
    }
/*
     public function testListAllData(){
        $return = $this->dataTeamControllerTest->_listAllData();
        $result = $this ->dataTeamDAOTest->listAllDataTeam();
        $this->assertEquals($result, $return);
    } */

}
?>
