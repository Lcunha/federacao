<?php

/* 
    Name: Game.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the game. The game must contains 'idGame', 'gameAudience', 
    'gameCity', 'gameLocation', 'gameDate', 'gameTime', 'gameDuration and 'total7Meters'. 
*/
class Game{
    private $idGame;
    private $gameAudience;
    private $gameCity;
    private $gameLocation;
    private $gameDate;
    private $gameTime;
    private $gameDuration;
    private $total7Meters;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for 
        any initialization that the object may need before being used.
    */
    public function __construct(){
	
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idGame, $gameAudience, $gameCity, $gameLocation, 
                                        $gameDate, $gameTime, $gameDuration, $total7Meters){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
	$this->idGame = $idGame;
	$this->gameAudience = $gameAudience;
	$this->gameCity = $gameCity;
	$this->gameLocation = $gameLocation;
	$this->gameDate = $gameDate;
	$this->gameTime = $gameTime;
	$this->gameDuration = $gameDuration;
	$this->total7Meters = $total7Meters;
    }
        
    /*
        Method to verify the attribute 'idGame' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdGame(){
	return $this->idGame;
    }
        
    /*
        Method to modify the attribute 'idGame' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setIdGame($idGame){
    	$this->idGame = $idGame;
    }
        
    /*
        Method to verify the attribute 'gameAudience' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameAudience(){
	return $this->gameAudience;
    }
        
    /*
        Method to modify the attribute 'gameAudience' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameAudience($gameAudience){
    	$this->gameAudience = $gameAudience;
    }
        
    /*
        Method to verify the attribute 'gameCity' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameCity(){
	return $this->gameCity;
    }
        
    /*
        Method to modify the attribute 'gameCity' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameCity($gameCity){
	$this->gameCity = $gameCity;
    }
        
    /*
        Method to verify the attribute 'gameLocation' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameLocation(){
	return $this->gameLocation;
    }
        
    /*
        Method to modify the attribute 'gameLocation' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameLocation($gameLocation){
	$this->gameLocation = $gameLocation;
    }
        
    /*
        Method to verify the attribute 'gameDate' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameDate(){
	return $this->gameDate;
    }
        
    /*
        Method to modify the attribute 'gameDate' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameDate($gameDate){
	$this->gameDate = $gameDate;
    }
        
    /*
        Method to verify the attribute 'gameTime' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameTime(){
	return $this->gameTime;
    }
        
    /*
        Method to modify the attribute 'gameTime' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameTime($gameTime){
	$this->gameTime = $gameTime;
    }
        
    /*
        Method to verify the attribute 'gameDuration' of the class. This function returns the value 
        in the attribute.
    */
    public function __getGameDuration(){
	return $this->gameDuration;
    }
        
    /*
        Method to modify the attribute 'gameDuration' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setGameDuration($gameDuration){
	$this->gameDuration = $gameDuration;
    }
        
    /*
        Method to verify the attribute 'total7Meters' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTotal7Meters(){
	return $this->total7Meters;
    }
        
    /*
        Method to modify the attribute 'total7Meters' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setTotal7Meters($total7Meters){
    	$this->total7Meters = $total7Meters;
    }
}