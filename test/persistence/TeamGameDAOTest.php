<?php

include_once("/../../model/TeamGame.php");
include_once("/../../persistence/TeamGameDAO.php");
include_once("/../../persistence/Connection.php");

class TeamGameDAOTest extends PHPUnit_Framework_TestCase {
    
    protected function setUp() {
        $this->teamGameTest = new TeamGame(/*parametros*/);
        $this->teamGameDaoTest = new TeamGameDAO();
    }

    protected function tearDown() {
        unset($this->teamGameDaoTest);
        unset($this->teamGameTest);
        
    }
    
    public function listAllTeamGames(){
            
    }

    public function insertTeamGame(TeamGame $teamDataGame){
          
    }

	
    public function updateTeamGame(TeamGame $teamDataGame){
            
    }

	
    public function consultByIdTeam(TeamGame $idTeam){
           
    }
	
    public function consultByTime(TeamGame $idTimePlay){
           
    }

	
    public function deleteTeamGame(TeamGame $idGame){
            
    }
    
    
}
