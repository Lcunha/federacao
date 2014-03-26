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
	
	public function __construct(){
		$this->timeCO = new TimeController();
		$this->jogadorCO = new JogadorController();
		$this->tecnicoCO = new TecnicoController();
		$this->arbitroCO = new ArbitroController();
	}
	public function contarRegistrosTime(){
		return $this->timeCO->_contarRegistrosTime();
	}
	public function contarRegistrosJogador(){
		return $this->jogadorCO->_contarRegistrosJogador();
	}
	public function contarRegistrosTecnico(){
		return $this->tecnicoCO->_contarRegistrosTecnico();
	}
	public function contarRegistrosArbitro(){
		return $this->arbitroCO->_contarRegistrosArbitro();
	}
	public function listarArtilheiros(){
		return $this->jogadorCO->_listarArtilheiros();
	}
	public function listarFearPlayers(){
		return $this->jogadorCO->_listarFearPlayers();
	}
	public function listarTimesParaTabelaCampeonato(){
		return $this->timeCO->_listarTimesParaTabelaCampeonato();
	}
}