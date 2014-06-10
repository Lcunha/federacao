<?php

include_once("/../../model/TeamGame.php");
include_once("/../../persistence/TeamGameDAO.php");
include_once("/../../persistence/Connection.php");

class TeamGameDAOTest extends PHPUnit_Framework_TestCase {
    
    protected function setUp() {
        $this->teamGameTest = new TeamGame(0, 1);
        $this->teamGameDaoTest = new TeamGameDAO();
    }

    protected function tearDown() {
        unset($this->teamGameDaoTest);
        unset($this->teamGameTest);
        
    }
    
    public function testListAllTeamGames(){
        $return = $this->teamGameDaoTest->listAllTeamGames();
        $this->assertNotNull($return);    
    }

    public function testInsertTeamGame(){
        $return = $this->teamGameDaoTest->insertTeamGame($this->teamGameTest);
        $this->assertTrue($return);
    }

    
    public function testUpdateTeamGame(){
        $return = $this->teamGameDaoTest->updateTeamGame($this->teamGameTest);
        $this->assertTrue($return);
    }

	
    public function testConsultByIdTeam(){
        $return = $this->teamGameDaoTest->consultByIdTeam(1);
        $this->assertFalse($return);
    }   
    /*
    public function consultByTime(TeamGame $idTimePlay){
           $return = $this->refereeDaoTest->consultByRefereeName('JoÃ£o de Barro');
        $this->assertFalse($return);     
    }

	
    public function deleteTeamGame(TeamGame $idGame){
            $retorno = $this->refereeDaoTest->deleteReferee(15);
        $this->assertTrue($retorno);  
    }
    
    */
}
