<?php

/*
    Name: TeamView.php
    Description: This view shows the data of the teams. It allows you to save 
    team, update team, delete team, list coaches for select, list all teams and 
    consult by id team.
*/
include_once (__APP_PATH.'/controller/TeamController.php');
include_once (__APP_PATH.'/controller/CoachController.php');
class TeamView{
	private $teamCO;
	/*
            This function is responsible to instantiate the TeamController.
        */ 
	public function __construct(){
		$this->teamCO = new TeamController();
	}
        /*
            This function is responsible to save the team data from de forms.
        */ 
	public function saveTeam(){
		$formTeam = $_POST;
		$this->teamCO->_saveTeam($formTeam['idCoach'], 
                $formTeam['teamName'], $formTeam['teamCategory'], 
                $formTeam['teamAddress'], $formTeam['teamFoundationDate'], 
                $formTeam['teamPresident'], $formTeam['teamPhone']);
		echo "Dados inseridos com sucesso";
	}
        /*
            The function receives as input parameter the id of the team 
            and returns to the team controller the function.
            This function is responsible to update the team information from 
            the forms.
        */ 
	public function updateTeam($idTeam){
		$formTeam = $_POST;
		return $this->teamCO->_updateTeam($id, $formTeam['idCoach'], 
                $formTeam['teamName'], $formTeam['teamCategory'], 
                $formTeam['teamAddress'], $formTeam['teamFoundationDate'],  
                $formTeam['teamPresident'], $formTeam['teamPhone']);
	}
        /*
            The function receives as input parameter the id of the team 
            and returns to the team controller the function.
            This function is responsible to delete a team.
        */ 
	public function deleteTeam($idTeam){
		return $this->teamCO->_deleteTeam($idTeam);
	}
        /*
            The function returns to the coach controller the function.
            This function is responsible to list the coachs by selecting them.
        */ 
	public function listCoachsForSelect(){
		$coachCO = new CoachController();
		return $coachCO->_listCoachsForSelect();
	}
        /*
            The function returns to the team controller the function.
            This function is responsible to list teams to the table.
        */ 
	public function listAllTeamsForTables(){
		return $this->teamCO->_listAllTeamsForTables();
	}
        /*
            The function returns to the team controller the function.
            This function is responsible to consult teams by id.
        */ 
	public function consultByIdTeam($idTeam){
		return $this->teamCO->_consultByIdTeam($idTeam);
	}
}