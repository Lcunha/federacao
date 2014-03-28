<?php

/*
    Name: TimeJogoView.php
    Description: This view shows the game of the team.
*/
include_once (__APP_PATH.'/controller/TimeJogoController.php');

class TimeJogoView{
	private $timeJogoCO;
        /*
            This function is responsible to instantiate the TimeJogoController.
        */ 
	public function __construct(){
		$this->timeJogoCO = new TimeJogoController();
	}
	/*
            This function is responsible to save the game.
        */ 
        public function salvar($idJogoAtual,$idTime){
		$this->timeJogoCO->_salvar($idJogoAtual, $idTime);
	}
}