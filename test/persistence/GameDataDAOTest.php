<?php

include_once("/../../model/GameData.php");
include_once("/../../persistence/GameDataDAO.php");

class GameDataDAOTest extends PHPUnit_Framework_TestCase{
    
    protected $gameDataDAOTest;
    protected $gameDataTest;
  
    protected function setUp() {
        $this->gameDataTest = new GameData();
        $this->gameDataDAOTest = new GameDataDAO();
    }

    protected function tearDown() {
        unset($this->gameDataDAOTest);
        unset($this->gameDataTest);
    }

}
?>
