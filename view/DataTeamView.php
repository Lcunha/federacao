<?php

/*
    Name: DataTeamView.php
    Description: This view allows to list all data team, consult by id, insert, 
    update and delete data team.
*/
include_once(__APP_PATH.'/controller/DataTeamController.php');

class DataTeamView{
	private $dataTeamCO;
        /*
            This function is responsible to instantiate the DataTeamController.
        */
	public function __construct(){
		$this->dataTeamCO = new DataTeamController();
	}
	/*
            The function returns to the data team controller the function.
            This function is responsible to list all the data of the Team.
        */
        public function  listAllData(){
		return $this->dataTeamCO->_listAllData();
	}
	/*
            The function receives as input parameter the id of the team and 
            returns to the data team controller the function.
            This function is responsible to consult the data of the team by the 
            id.
        */
        public function  consultByIdDataTeam($id){
		return $this->dataTeamCO->_consultByIdDataTeam($id);
	}
	/*
            The function returns to the data team controller the function.
            This function is responsible to add team data.
        */
        public function insertDataTeam(){
		return $this->dataTeamCO->_insertDataTeam($dataTeam);
	}
	/*
            The function receives as input parameter the id of the team and 
            returns to the data team controller the function.
            This function is responsible to update team data.
        */
        public function updateDataTeam($id){
		$form = $_POST;
		return $this->dataTeamCO->_updateDataTeam();
	}
	/*
            The function receives as input parameter the id of the team and 
            returns to the data team controller the function.
            This function is responsible to delete team data.
        */
        public function deleteDataTeam($id){
		return $this->dataTeamCO->_deleteDataTeam($id);
	}
	
}