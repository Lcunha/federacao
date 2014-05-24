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
        Method to verify the attribute 'idPlayer' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdPlayer(){
	return $this->idPlayer;
    }
        
    /*
        Method to modify the attribute 'idPlayer' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setIdPlayer($idPlayer){
	$this->idPlayer = $idPlayer;
    }
        
    /*
        Method to verify the attribute 'playerName' of the class. This function returns the value 
        in the attribute.
    */
    public function __getPlayerName(){
	return $this->playerName;
    }
        
    /*
        Method to modify the attribute 'playerName' of the class. his function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setPlayerName($playerName){
	$this->playerName = $playerName;
    }
        
    /*
        Method to verify the attribute 'birthDatePlayer' of the class. This function returns the 
        value in the attribute.
    */
    public function __getBirthDatePlayer(){
	return $this->birthDatePlayer;
    }
        
    /*
        Method to modify the attribute 'birthDatePlayer' of the class. his function defines that  
        the new value that the program or the user put on the attribute will be now the value of
        the attribute.
    */
    public function __setBirthDatePlayer($birthDatePlayer){
	$this->birthDatePlayer = $birthDatePlayer;
    }
        
    /*
        Method to verify the attribute 'cpfPlayer' of the class. This function returns the value 
        in the attribute.
    */
    public function __getCpfPlayer(){
	return $this->cpfPlayer;
    }
        
    /*
        Method to modify the attribute 'cpfPlayer' of the class. his function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setCpfPlayer($cpfPlayer){
	$this->cpfPlayer = $cpfPlayer;
    }
        
    /*
        Method to verify the attribute 'idTeam' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdTeam(){
	return $this->idTeam;
    }
        
    /*
        Method to modify the attribute 'idTeam' of the class. his function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setIdTeam($idTeam){
	$this->idTeam = $idTeam;
    }
        
    /*
        Method to verify the attribute 'playerNumber' of the class. This function returns the value 
        in the attribute.
    */
    public function __getPlayerNumber(){
	return $this->playerNumber;
    }
        
    /*
        Method to modify the attribute 'playerNumber' of the class. his function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setPlayerNumber($playerNumber){
	$this->playerNumber = $playerNumber;
    }
}

