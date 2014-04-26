<?php

/*
    Name: GameDataView.php
    Description: This view shows the data added by the user.
*/
include_once(__APP_PATH.'/controller/GameDataController.php');

class GameDataView{
    private $gameDataCO;
    
    /*
        This function is responsible to instantiate the GameDataController.
    */
    public function __construct(){
        $this->gameDataCO = new GameDataController();
    }
    
    /*
        This function is responsible to consult the controller data.
    */
    public function consultByIdGameData($id){
	return $this->gameDataCO->_consultByIdGameData($id);
    }
    
    /*
        This function is responsible to add to the controller data.
    */
    public function insertDataTeam($idTimeInserted, $idTeam1, $idTeam2){
	return $this->gameDataCO->_insertDataTeam($idTimeInserted,$idTeam1, $idTeam2);
    }
    
    /*
        This function is responsible to update the controller data from the text received 
        by the form.
    */
    public function updateData($id){
	$formGameData = $_POST;
	return $this->gameDataCO->_updateData();
    }
    
    /*
        This function is responsible to delete the controller data.
    */
    public function deleteData($id){
	return $this->gameDataCO->_deleteData($id);
    }	
}