<?php

/*
    Name: RefereeView.php
    Description: View of arbrito.
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
            This function is responsible to update the arbitro data.
        */
	public function updateReferee($idReferee){
		$formReferee = $_POST;
		return $this->refereeCO->_updateReferee($idReferee, $formReferee['refereeName'], 
                $formReferee['refereePhone'], $formReferee['refereeCpf']);
	}
        /*
            This function is responsible to delete the arbitro.
        */
	public function deleteReferee($idReferee){
		return $this->refereeCO->_deleteReferee($idReferee);
	}
        /*
            This function is responsible to list the arbitros in a table.
        */
	public function listAllRefereesForTables(){
		return $this->refereeCO->_listAllRefereesForTables();
	}
        /*
            This function is responsible to consult an arbitro by the id.
        */
	public function consultByIdReferee($idReferee){
		return $this->refereeCO->_consultByIdReferee($idReferee);
	}
}