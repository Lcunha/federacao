<?php

/* 
    Name: TeamGame.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the team that is playing the game. The team in the game 
    must contains 'idJogo' and 'idTime'. 
*/
class TeamGame{
    private $idGame;
    private $idTeam;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){

    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idGame, $idTime){
    	$this->idGame = $idGame;
	$this->idTime = $idTime;
    }
        
    /*
        Method to verify the attribute 'idGame' of the class.
    */
    public function __getIdGame(){
	return $this->idGame;
    }
        
    /*
        Method to modify the attribute 'idGame' of the class.
    */
    public function __setIdGame($idGame){
	$this->idGame = $idGame;
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