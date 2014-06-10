<?php

include_once("/../../model/Player.php");
include_once("/../../persistence/PlayerDAO.php");
include_once("/../../persistence/Connection.php");

class PlayerDAOTest extends PHPUnit_Framework_TestCase {
    
    protected $playerTest;
    protected $playerDAOTest;
    
    protected function setUp() {
        $this->playerTest = new Player(/*parametros*/);
        $this->playerDAOTest = new PlayerDAO();
    }

    protected function tearDown() {
        unset($this->playerTest);
        unset($this->playerDAOTest);
    }
    
     public function testGetInstancePlayerTestTestNotNull() {
        $this->assertNotNull($this->playerTest);
    }
    
     public function testGetInstancePlayerDAOTestTestNotNull() {
        $this->assertNotNull($this->playerDAOTest);
    }
}   
