<?php

/*
    Name: TeamGameView.php
    Description: This view shows the game of the team and allows to save team 
    game.
*/
include_once (__APP_PATH.'/controller/TeamGameController.php');

class TeamGameView{
	private $teamGameCO;
        /*
            This function is responsible to instantiate the TimeJogoController.
        */ 
	public function __construct(){
		$this->teamGameCO = new TeamGameController();
	}
	/*
            The function receives as input parameter the id of the current game 
            and the team id.
            This function is responsible to save the game.
        */ 
        public function saveTeamGame($idCurrentGame,$idTeam){
		$this->teamGameCO->_saveTeamGame($idCurrentGame, $idTeam);
	}
}