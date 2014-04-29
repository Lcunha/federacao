<?php

/*
    Name: PlayerView.php
    Description: This view shows the options of the players.
*/
include_once(__APP_PATH.'/controller/PlayerController.php');
include_once(__APP_PATH.'/controller/TeamController.php');

class PlayerView{
	private $playerCO;
        /*
            This function is responsible to instantiate the PlayerController.
        */	
	public function __construct(){
		$this->playerCO = new PlayerController();
	}
        /*
            This function is responsible to save the player date received by 
            form.
        */
	public function savePlayer(){
		$formPlayer = $_POST;
		$this->playerCO->_savePlayer($formPlayer['idTeam'], 
                $formPlayer['playerName'], $formPlayer['birthDatePlayer'], 
                $formPlayer['cpfPlayer'], $formPlayer['playerNumber']);
		echo "Dados inseridos com sucesso";
	}
        /*
            This function is responsible to list the teams.
        */
	public function listAllTeamsForSelect(){
		$teamCO = new TeamController();
		return $teamCO->_listAllTeamsForSelect();
	}
        /*
            This function is responsible to list the player to the table.
        */
	public function listAllPlayersAllTables(){
		return $this->playerCO->_listAllPlayersAllTables();
	}
        /*
            This function is responsible to list the players of team A.
        */
	public function listAllPlayersForDocketTeamA($team, $idTimePlay){
		return $this->playerCO->_listAllPlayersForDocketTeamA($team, 
                $idTimePlay);
	}
        /*
            This function is responsible to list the player of team B.
        */
	public function listAllPlayersForDocketTeamB($team, $idTimePlay){
		return $this->playerCO->_listAllPlayersForDocketTeamB($team, 
                $idTimePlay);
	}
        /*
            This function is responsible to update the player information.
        */
	public function updatePlayer($idPlayer){
		$formPlayer = $_POST;
		return $this->playerCO->_atualizar($idPlayer, $formPlayer['idTeam'],  
                $formPlayer['playerName'], $formPlayer['birthDatePlayer'], 
                $formPlayer['cpfPlayer'], $formPlayer['playerNumber']);
	}
        /*
            This function is responsible to delete the player.
        */
	public function deletePlayer($idPlayer){
		return $this->playerCO->_deletePlayer($idPlayer);
	}
        /*
            This function is responsible to consult player by the id.
        */
	public function consultByIdPlayer($idPlayer){
		return $this->playerCO->_consultByIdPlayer($idPlayer);
	}
}
