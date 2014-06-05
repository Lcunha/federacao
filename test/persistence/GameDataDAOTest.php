<?php

include_once("/../../model/GameData.php");
include_once("/../../persistence/GameDataDAO.php");

class TimeControllerTest extends PHPUnit_Framework_TestCase{
    
    protected $gameDataDAOTest;
    protected $gameDataTest;
  
    protected function setUp() {
        $this->gameDataTest = new GameData(5, 2, 'jogador', 4, 6, 7, 8);
        $this->gameDataDAOTest = new GameDataDAO();
    }

    protected function tearDown() {
        unset($this->gameDataDAOTest);
        unset($this->gameDataTest);
    }

}
?>
