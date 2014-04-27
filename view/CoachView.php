<?php

/*
    Name: CoachView.php
    Description: This view shows the data of the coach. It can also be used to change or delete it.
*/
include_once (__APP_PATH.'/controller/CoachController.php');

class CoachView{
    private $coachCO;
    
    /*
        This function is responsible to instantiate the CoachController.
    */ 
    public function __construct(){
	$this->coachCO = new CoachController();
    }
    
    /*
        This function is responsible to save the coach data from the forms.
    */ 
    public function saveCoach(){
	$formCoach = $_POST;
	$this->coachCO->_saveCoach($formCoach['coachName'], $formCoach['coachPhone'], 
                                   $formCoach['coachCpf']);
        echo "Dados inseridos com sucesso";
    }
    
    /*
        This function is responsible to update de coach data from the forms.
    */ 
    public function updateCoach($id){
        $formCoach = $_POST;
	return $this->coachCO->_updateCoach($id, $formCoach['coachName'], $formCoach['coachPhone'], 
               $formCoach['coachCpf']);
    }
    
    /*
        This function is responsible to delete the coach.
    */ 
    public function deleteCoach($id){
	return $this->coachCO->_deleteCoach($id);
    }
    
    /*
        This function is responsible to list the coachs to the table.
    */ 
    public function listAllCoachesForTable(){
	return $this->coachCO->_listAllCoachesForTable();
    }
    
    /*
        This function is responsible to consult coachs by id.
    */ 
    public function consultByIdCoach($id){
	return $this->coachCO->_consultByIdCoach($id);
    }
}