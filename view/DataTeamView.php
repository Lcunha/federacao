<?php

/*
    Name: DadosTimeView.php
    Description: This view shows the data of each team.
*/
include_once(__APP_PATH.'/controller/DataTeamController.php');

class DataTeamView{
	private $dataTeamCO;
        /*
            This function is responsible to instantiate the DadosTimeController.
        */
	public function __construct(){
		$this->dataTeamCO = new DataTeamController();
	}
	/*
            This function is responsible to list all the data of the Team.
        */
        public function  showAllData(){
		return $this->dataTeamCO-> showAllData();
	}
	/*
            This function is responsible to consult the data of the team by the 
            id.
        */
        public function  browseByIdData($id){
		return $this->dataTeamCO->_browseByIdData($id);
	}
	/*
            This function is responsible to add team data.
        */
        public function insertData(){
		return $this->dataTeamCO->_insertData($dataTeam);
	}
	/*
            This function is responsible to update team data.
        */
        public function updateData($id){
		$form = $_POST;
		return $this->dataTeamCO->_updateData();
	}
	/*
            This function is responsible to delete team data.
        */
        public function deleteData($id){
		return $this->dataTeamCO->_deleteData($id);
	}
	
}