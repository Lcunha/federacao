<?php

/* 
    Name: Player.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a player. The player must contains 'idPlayer', 'idTeam', 
    'playerName', 'birthDatePlayer', 'cpfPlayer' and 'playerNumber'. 
*/
class Player{
    private $idPlayer;
    private $idTeam;
    private $playerName;
    private $birthDatePlayer;
    private $cpfPlayer;
    private $playerNumber;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any  
        initialization that the object may need before being used.
    */
    public function __construct(){
		
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idPlayer, $idTeam, $playerName, $birthDatePlayer,  
                                        $cpfPlayer, $playerNumber){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
    	$this->idPlayer = $idPlayer;
	$this->idTeam = $idTeam;
	$this->playerName = $playerName;
	$this->birthDatePlayer = $birthDatePlayer;
	$this->cpfPlayer = $cpfPlayer;
	$this->playerNumber = $playerNumber;
    }
        
    /*
        Method to verify the attribute 'idPlayer' of the class.
    */
    public function __getIdPlayer(){
        
        /* 
            Return the value in the attribute 'idPlayer'.
        */
	return $this->idPlayer;
    }
        
    /*
        Method to modify the attribute 'idPlayer' of the class.
    */
    public function __setIdPlayer($idPlayer){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idPlayer'.
        */
	$this->idPlayer = $idPlayer;
    }
        
    /*
        Method to verify the attribute 'playerName' of the class.
    */
    public function __getPlayerName(){
        
        /* 
            Return the value in the attribute 'playerName'.
        */
	return $this->playerName;
    }
        
    /*
        Method to modify the attribute 'playerName' of the class.
    */
    public function __setPlayerName($playerName){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'playerName'.
        */
	$this->playerName = $playerName;
    }
        
    /*
        Method to verify the attribute 'birthDatePlayer' of the class.
    */
    public function __getBirthDatePlayer(){
        
        /* 
            Return the value in the attribute 'bithDatePlayer'.
        */
	return $this->birthDatePlayer;
    }
        
    /*
        Method to modify the attribute 'birthDatePlayer' of the class.
    */
    public function __setBirthDatePlayer($birthDatePlayer){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'birthDatePlayer'.
        */
	$this->birthDatePlayer = $birthDatePlayer;
    }
        
    /*
        Method to verify the attribute 'cpfPlayer' of the class.
    */
    public function __getCpfPlayer(){
        
        /* 
            Return the value in the attribute 'cpfPlayer'.
        */
	return $this->cpfPlayer;
    }
        
    /*
        Method to modify the attribute 'cpfPlayer' of the class.
    */
    public function __setCpfPlayer($cpfPlayer){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'cpfPlayer'.
        */
	$this->cpfPlayer = $cpfPlayer;
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
        
    /*
        Method to verify the attribute 'playerNumber' of the class.
    */
    public function __getPlayerNumber(){
        
        /* 
            Return the value in the attribute 'playerNumber'.
        */
	return $this->playerNumber;
    }
        
    /*
        Method to modify the attribute 'playerNumber' of the class.
    */
    public function __setPlayerNumber($playerNumber){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'playerNumber'.
        */
	$this->playerNumber = $playerNumber;
    }
}

