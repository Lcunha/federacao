<?php

/*
    Name: PlayerView.php
    Description: This view allows you to save player, list teams for select, 
    list all tems, list all players, list all players for docket team A, list 
    all player for docket team B, update player, delete player and consult by
    id player.
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
		$this->playerCO->_savePlayer($formPlayer['time_id_time'], 
                $formPlayer['nome'], $formPlayer['data_nascimento'], 
                $formPlayer['cpf'], $formPlayer['numero']);
		echo "Dados inseridos com sucesso";
	}
        /*
            The function returns to the team controller the function.
            This function is responsible to list the teams.
        */
	public function listAllTeamsForSelect(){
		$teamCO = new TeamController();
		return $teamCO->_listAllTeamsForSelect();
	}
        /*
            The function returns to the player controller the function.
            This function is responsible to list the player to the table.
        */
	public function listAllPlayersAllTables(){
		return $this->playerCO->_listAllPlayersAllTables();
	}
        /*
            The function receives as input parameter the team and the id of time 
            play and return to the player controller the function.
            This function is responsible to list the players of team A.
        */
	public function listAllPlayersForDocketTeamA($team, $idTimePlay){
		return $this->playerCO->_listAllPlayersForDocketTeamA($team, 
                $idTimePlay);
	}
        /*
            The function receives as input parameter the team and the id of time 
            play and return to the player controller the function.
            This function is responsible to list the player of team B.
        */
	public function listAllPlayersForDocketTeamB($team, $idTimePlay){
		return $this->playerCO->_listAllPlayersForDocketTeamB($team, 
                $idTimePlay);
	}
        /*
            The function receives as input parameter the player id and return 
            to the player controller the function.
            This function is responsible to update the player information.
        */
	public function updatePlayer($idPlayer){
		$formPlayer = $_POST;
		return $this->playerCO->_atualizar($idPlayer, $formPlayer['idTeam'],  
                $formPlayer['playerName'], $formPlayer['birthDatePlayer'], 
                $formPlayer['cpfPlayer'], $formPlayer['playerNumber']);
	}
        /*
            The function receives as input parameter the player id and return 
            to the player controller the function.
            This function is responsible to delete the player.
        */
	public function deletePlayer($idPlayer){
		return $this->playerCO->_deletePlayer($idPlayer);
	}
        /*
            The function receives as input parameter the player id and return 
            to the player controller the function.
            This function is responsible to consult player by the id.
        */
	public function consultByIdPlayer($idPlayer){
		return $this->playerCO->_consultByIdPlayer($idPlayer);
	}
}
