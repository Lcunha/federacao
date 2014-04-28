<?php

/*
    Name: DadosTimeView.php
    Description: This view shows the data of each team.
*/
include_once(__APP_PATH.'/controller/DadosTimeController.php');

class DadosTimeView{
	private $dadosTimeCO;
        /*
            This function is responsible to instantiate the DadosTimeController.
        */
	public function __construct(){
		$this->dadosTimeCO = new DadosTimeController();
	}
	/*
            This function is responsible to list all the data of the Team.
        */
        public function  showAllData(){
		return $this->dadosTimeCO-> showAllData();
	}
	/*
            This function is responsible to consult the data of the team by the 
            id.
        */
        public function  browseByIdData($id){
		return $this->dadosTimeCO->_browseByIdData($id);
	}
	/*
            This function is responsible to add team data.
        */
        public function insertData(){
		return $this->dadosTimeCO->_insertData($dataTeam);
	}
	/*
            This function is responsible to update team data.
        */
        public function updateData($id){
		$formulario = $_POST;
		return $this->dadosTimeCO->_updateData();
	}
	/*
            This function is responsible to delete team data.
        */
        public function deleteData($id){
		return $this->dadosTimeCO->_deleteData($id);
	}
	
}