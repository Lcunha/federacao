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
    
     public function testGetInstanceGameDAtaDaoTestTestNotNull() {
        $this->assertNotNull($this->gameDataDAOTest);
    }
    
      public function testGetInstanceGameDataTestNotNull() {
        $this->assertNotNull($this->gameDataTest);
    }
    
    public function testInsertGameData() {
        $retorno = $this->gameDataDAOTest->insertGameData($this->gameDataTest);
        $this->assertTrue($retorno);
    }    

    public function testUpdateData() {
        $retorno = $this->gameDataDAOTest->insertGameData($this->gameDataTest);
        $this->assertTrue($retorno);
    } 
    
    public function testUpdateGameData() {
        $retorno = $this->gameDataDAOTest->insertGameData($this->gameDataTest);
        $this->assertTrue($retorno);
    } 
   
    public function testDeleteGameData() {
        $retorno = $this->gameDataDAOTest->deleteGameData(1);
        $this->assertTrue($retorno);
    } 
    

}
?>
