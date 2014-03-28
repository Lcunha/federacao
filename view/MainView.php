<?php 
/*
    Name: MainView.php
    Description: This is the main view. It shows the options that lead to the other views.
*/
include_once(__APP_PATH.'/controller/TimeController.php');
include_once(__APP_PATH.'/controller/JogadorController.php');
include_once(__APP_PATH.'/controller/TecnicoController.php');
include_once(__APP_PATH.'/controller/ArbitroController.php');
class MainView{
	private $mainCO;
	private $timeCO;
	private $jogadorCO;
	private $tecnicoCO;
	private $arbitroCO;
	 
        /*
            This function is responsible to instantiate the TimeController, JogadorController, TecnicoController and ArbitroController.
        */        
	public function __construct(){
		$this->timeCO = new TimeController();
		$this->jogadorCO = new JogadorController();
		$this->tecnicoCO = new TecnicoController();
		$this->arbitroCO = new ArbitroController();
	}
        /*
            This function is responsible to count the team records.
        */
	public function contarRegistrosTime(){
		return $this->timeCO->_contarRegistrosTime();
	}
        /*
            This function is responsible to count the player records.
        */
	public function contarRegistrosJogador(){
		return $this->jogadorCO->_contarRegistrosJogador();
	}
        /*
            This function is responsible to count the coach records.
        */
	public function contarRegistrosTecnico(){
		return $this->tecnicoCO->_contarRegistrosTecnico();
	}
        /*
            This function is responsible to count the Arbitro records.
        */
	public function contarRegistrosArbitro(){
		return $this->arbitroCO->_contarRegistrosArbitro();
	}
        /*
            This function is responsible to list the Artilheiros.
        */
	public function listarArtilheiros(){
		return $this->jogadorCO->_listarArtilheiros();
	}
        /*
            This function is responsible to list the fear players.
        */
	public function listarFearPlayers(){
		return $this->jogadorCO->_listarFearPlayers();
	}
        /*
            This function is responsible to list teams to the championship table.
        */
	public function listarTimesParaTabelaCampeonato(){
		return $this->timeCO->_listarTimesParaTabelaCampeonato();
	}
}