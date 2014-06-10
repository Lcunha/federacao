<?php

include_once("/../../model/Game.php");
include_once("/../../persistence/GameDAO.php");
include_once("/../../persistence/Connection.php");

class GameDAOTest extends PHPUnit_Framework_TestCase {

   
    protected function setUp() {
        $this->gameTest = new Game(2, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0);
        $this->gameDaoTest = new GameDAO();
    }

    protected function tearDown() {
        unset($this->gameDaoTest);
        unset($this->gameTest);
        
    }
    
    
    public function testListAllGames(){
        $return = $this->gameDaoTest->listAllGames();
        $this->assertNotNull($return); 
    }
	
    public function testInsertGame(){
        $return = $this->gameDaoTest->insertGame($this->gameTest);
        $this->assertTrue($return);
    }
    
    public function testUpdateGame(){
        $return = $this->gameDaoTest->updateGame($this->gameTest);
        $this->assertTrue($return);
    }
	
	
    public function testConsultByIdGame(){
        $return = $this->gameDaoTest->consultByIdGame(1);
        $this->assertFalse($return);
    }
	
	/*
    public function consultByGameDate(Game $gameDate){
            $return = $this->refereeDaoTest->consultByRefereeName('JoÃ£o de Barro');
        $this->assertFalse($return);     
    }

	
    public function deleteGame(Game $idReferee){
           $retorno = $this->refereeDaoTest->deleteReferee(15);
        $this->assertTrue($retorno);  
    }
    */
}
