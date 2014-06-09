<?php

include_once("/../../model/Game.php");
include_once("/../../persistence/GameDAO.php");
include_once("/../../persistence/Connection.php");

class GameDAOTest extends PHPUnit_Framework_TestCase {

   
    protected function setUp() {
        $this->refereeTest = new Game(/*parametros*/);
        $this->refereeDaoTest = new GameDAO();
    }

    protected function tearDown() {
        unset($this->refereeDaoTest);
        unset($this->refereeTest);
        
    }
    
    
    public function listAllGames(){
            
    }
	
    public function insertGame(Game $gameData){
            
    }
	
    public function updateGame(Game $gameData){
            
    }
	
	
    public function consultByIdGame(Game $idGame){
            
    }
	
	
    public function consultByGameDate(Game $gameDate){
            
    }

	
    public function deleteGame(Game $idReferee){
           
    }
    
}
