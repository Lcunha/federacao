<?php

/*
    Name: RefereeView.php
    Description: This view allows you to save referee, update referee, delete 
    referee, list all referees and consult referee by id.
*/
include_once(__APP_PATH.'/controller/RefereeController.php');

class RefereeView{
	private $refereeCO;
        
        /*
            This function is responsible to instantiate the ArbitroController.
        */
	public function __construct(){
		$this->refereeCO = new RefereeController();
	}
        /*
            This function is responsible to get the data typed on the forms and 
            save them.
        */
	public function saveReferee(){
		$formReferee = $_POST;
		$this->refereeCO->_saveReferee($formReferee['refereeName'], 
                ['refereePhone'], $formReferee['refereeCpf']);
		echo "Dados inseridos com sucesso";
	}
        /*
            The function returns to the referee controller the function.
            This function is responsible to update the referee data.
        */
	public function updateReferee($idReferee){
		$formReferee = $_POST;
		return $this->refereeCO->_updateReferee($idReferee, $formReferee['refereeName'], 
                $formReferee['refereePhone'], $formReferee['refereeCpf']);
	}
        /*
            This function is responsible to delete the referee.
        */
	public function deleteReferee($idReferee){
		return $this->refereeCO->_deleteReferee($idReferee);
	}
        /*
            This function is responsible to list the referees in a table.
        */
	public function listAllRefereesForTables(){
		return $this->refereeCO->_listAllRefereesForTables();
	}
        /*
            This function is responsible to consult an referee by the id.
        */
	public function consultByIdReferee($idReferee){
		return $this->refereeCO->_consultByIdReferee($idReferee);
	}
}