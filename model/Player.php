<?php

/* 
    Name: Player.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a player. The player must contains 'idPlayer', 'idTeam', 
    'playerName', 'birthDatePlayer', 'cpf' and 'playerNumber'. 
*/
class Player{
    private $idPlayer;
    private $idTeam;
    private $playerName;
    private $birthDatePlayer;
    private $cpf;
    private $playerNumber;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
		
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idPlayer, $idTeam, $playerName, $birthDatePlayer, $cpf, 
                                        $playerNumber){
    	$this->idPlayer = $idPlayer;
	$this->idTeam = $idTeam;
	$this->playerName = $playerName;
	$this->birthDatePlayer = $birthDatePlayer;
	$this->cpf = $cpf;
	$this->playerNumber = $playerNumber;
    }
        
    /*
        Method to verify the attribute 'idPlayer' of the class.
    */
    public function __getIdPlayer(){
	return $this->idPlayer;
    }
        
    /*
        Method to modify the attribute 'idPlayer' of the class.
    */
    public function __setIdPlayer($idPlayer){
	$this->idPlayer = $idPlayer;
    }
        
    /*
        Method to verify the attribute 'playerName' of the class.
    */
    public function __getPlayerName(){
	return $this->playerName;
    }
        
    /*
        Method to modify the attribute 'playerName' of the class.
    */
    public function __setPlayerName($playerName){
	$this->playerName = $playerName;
    }
        
    /*
        Method to verify the attribute 'birthDatePlayer' of the class.
    */
    public function __getBirthDatePlayer(){
	return $this->birthDatePlayer;
    }
        
    /*
        Method to modify the attribute 'birthDatePlayer' of the class.
    */
    public function __setBirthDatePlayer($birthDatePlayer){
	$this->birthDatePlayer = $birthDatePlayer;
    }
        
    /*
        Method to verify the attribute 'cpf' of the class.
    */
    public function __getCpf(){
	return $this->cpf;
    }
        
    /*
        Method to modify the attribute 'cpf' of the class.
    */
    public function __setCpf($cpf){
	$this->cpf = $cpf;
    }
        
    /*
        Method to verify the attribute 'idTeam' of the class.
    */
    public function __getIdTeam(){
	return $this->idTeam;
    }
        
    /*
        Method to modify the attribute 'idTeam' of the class.
    */
    public function __setIdTeam($idTeam){
	$this->idTeam = $idTeam;
    }
        
    /*
        Method to verify the attribute 'playerNumber' of the class.
    */
    public function __getPlayerNumber(){
	return $this->playerNumber;
    }
        
    /*
        Method to modify the attribute 'playerNumber' of the class.
    */
    public function __setPlayerNumber($playerNumber){
	$this->playerNumber = $playerNumber;
    }
}

