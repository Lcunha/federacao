<?php

/*
    Name: CoachView.php
    Description: This view can create a new coach, update, delete, list all 
    coaches and consult coach by id. It can also be used to change or delete it.

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
	$this->coachCO->_saveCoach($formCoach['coachName'], 
                $formCoach['coachPhone'], $formCoach['coachCpf']);
        echo "Dados inseridos com sucesso";
    }
    
    /*
        The function receives as input parameter the id of a Coach and returns 
        to the coach controller the data received by form.
        This function is responsible to receive data from the forms and send 
        them to update on coach controller. 
    */ 
    public function updateCoach($id){
        $formCoach = $_POST;
	return $this->coachCO->_updateCoach($id, $formCoach['coachName'], 
                $formCoach['coachPhone'], $formCoach['coachCpf']);
    }
    
    /*
        The function receives as input parameter the id of a Coach and returns 
        to the coach controller the id received by form.
        This function is responsible to delete the coach received by form.
    */ 
    public function deleteCoach($id){
	return $this->coachCO->_deleteCoach($id);
    }
    
    /*
        This function is responsible to list the coaches to the table.
    */ 
    public function listAllCoachesForTable(){
	return $this->coachCO->_listAllCoachesForTable();
    }
    
    /*
        The function receives as input parameter the id of a Coach and returns 
        to the coach controller the data received by form.
        This function is responsible to consult coachs by id.
    */ 
    public function consultByIdCoach($id){
	return $this->coachCO->_consultByIdCoach($id);
    }
}