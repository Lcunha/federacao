<?php 

/*
    Name: MainView.php
    Description: This is the main view. It allows you to consult the amount of 
    teams, players, coaches and referees records. It also allows you to list 
    gunners, fear players and all teams for championship table.
*/
include_once(__APP_PATH.'/controller/TeamController.php');
include_once(__APP_PATH.'/controller/PlayerController.php');
include_once(__APP_PATH.'/controller/CoachController.php');
include_once(__APP_PATH.'/controller/RefereeController.php');
class MainView{
	private $mainCO;
	private $teamCO;
	private $playerCO;
	private $coachCO;
	private $refereeCO;
	 
        /*
            This function is responsible to instantiate the TeamController, 
            PlayerController, CoachController and RefereeController.
        */        
	public function __construct(){
		$this->teamCO = new TeamController();
		$this->playerCO = new PlayerController();
		$this->coachCO = new CoachController();
		$this->refereeCO = new RefereeController();
	}
        /*
            This function is responsible to count the team records.
        */
	public function amountTeamsRecords(){
		return $this->teamCO->_amountTeamsRecords();
	}
        /*
            This function is responsible to count the player records.
        */
	public function amountPlayersRecords(){
		return $this->playerCO->_amountPlayersRecords();
	}
        /*
            This function is responsible to count the coach records.
        */
	public function amountCoachesRecords(){
		return $this->coachCO->_amountCoachesRecords();
	}
        /*
            This function is responsible to count the Referee records.
        */
	public function amountRefereesRecords(){
		return $this->refereeCO->_amountRefereesRecords();
	}
        /*
            This function is responsible to list the Artilheiros.
        */
	public function listGunners(){
		return $this->playerCO->_listGunners();
	}
        /*
            This function is responsible to list the fear players.
        */
	public function listFearPlayers(){
		return $this->playerCO->_listFearPlayers();
	}
        /*
            This function is responsible to list teams to the championship table.
        */
	public function listAllTeamsForChampionshipTable(){
		return $this->teamCO->_listAllTeamsForChampionshipTable();
	}
}