<?php
include_once (__APP_PATH.'/controller/TimeJogoController.php');

class TimeJogoView{
	private $timeJogoCO;

	public function __construct(){
		$this->timeJogoCO = new TimeJogoController();
	}
	public function salvar($idJogoAtual,$idTime){
		$this->timeJogoCO->_salvar($idJogoAtual,$idTime);
	}
}