<?php

/* 
    Name: TimeJogo.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the team that is playing the game. The team in the game 
    must contains 'idJogo' and 'idTime'. 
 */
class TimeJogo{
	private $idJogo;
	private $idTime;
	
	public function __construct(){
	
	}
	public function __constructOverload($idJogo,$idTime){
		$this->idJogo = $idJogo;
		$this->idTime = $idTime;
	}
	public function __getIdJogo(){
		return $this->idJogo;
	}
	public function __setIdJogo($idJogo){
		$this->idJogo = $idJogo;
	}
	public function __getIdTime(){
		return $this->idTime;
	}
	public function __setIdTime($idTime){
		$this->idTime = $idTime;
	}
	
	
}