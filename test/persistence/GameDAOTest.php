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
    
    /*
    public function listAllGames(){
            $return = $this->refereeDaoTest->listAllReferees();
        $this->assertNotNull($return); 
    }
	
    public function insertGame(Game $gameData){
            $return = $this->refereeDaoTest->insertReferee($this->refereeTest);
        $this->assertTrue($return);
    }
	
    public function updateGame(Game $gameData){
            $return = $this->refereeDaoTest->updateReferee($this->refereeTest);
        $this->assertTrue($return);
    }
	
	
    public function consultByIdGame(Game $idGame){
            $return = $this->refereeDaoTest->consultByIdReferee(1);
        $this->assertFalse($return);
    }
	
	
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
