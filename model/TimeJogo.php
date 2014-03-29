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
	
/*
    Default construct declaration. Using constructor methods is appropriate for any initialization 
    that the object may need before being used.
*/
    public function __construct(){

    }
        
/*
    Overload construct.
*/
    public function __constructOverload($idJogo, $idTime){
    	$this->idJogo = $idJogo;
	$this->idTime = $idTime;
    }
        
/*
    Method to verify the attribute 'idJogo' of the class.
*/
    public function __getIdJogo(){
	return $this->idJogo;
    }
        
/*
    Method to modify the attribute 'idJogo' of the class.
*/
    public function __setIdJogo($idJogo){
	$this->idJogo = $idJogo;
    }
        
/*
    Method to verify the attribute 'idTime' of the class.
*/
    public function __getIdTime(){
	return $this->idTime;
    }
        
/*
    Method to modify the attribute 'idTime' of the class.
*/
    public function __setIdTime($idTime){
	$this->idTime = $idTime;
    }
}