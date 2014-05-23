<?php

/* 
    Name: TeamGame.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the team that is playing the game. The team in the game 
    must contains 'idJogo' and 'idTeam'. 
*/
class TeamGame{
    private $idGame;
    private $idTeam;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){

    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idGame, $idTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
    	$this->idGame = $idGame;
	$this->idTeam = $idTeam;
    }
        
    /*
        Method to verify the attribute 'idGame' of the class.
    */
    public function __getIdGame(){
        
        /* 
            Return the value in the attribute 'idGame'.
        */
	return $this->idGame;
    }
        
    /*
        Method to modify the attribute 'idGame' of the class.
    */
    public function __setIdGame($idGame){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idGame'.
        */
	$this->idGame = $idGame;
    }
        
    /*
        Method to verify the attribute 'idTeam' of the class.
    */
    public function __getIdTeam(){
        
        /* 
            Return the value in the attribute 'idTeam'.
        */
	return $this->idTeam;
    }
        
    /*
        Method to modify the attribute 'idTeam' of the class.
    */
    public function __setIdTeam($idTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idTeam'.
        */
	$this->idTeam = $idTeam;
    }
}