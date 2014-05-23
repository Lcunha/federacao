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
        Method to verify the attribute 'gameAudience' of the class.
    */
    public function __getGameAudience(){
        
        /* 
            Return the value in the attribute 'gameAudience'.
        */
	return $this->gameAudience;
    }
        
    /*
        Method to modify the attribute 'gameAudience' of the class.
    */
    public function __setGameAudience($gameAudience){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameAudience'.
        */
    	$this->gameAudience = $gameAudience;
    }
        
    /*
        Method to verify the attribute 'gameCity' of the class.
    */
    public function __getGameCity(){
        /* 
            Return the value in the attribute 'gameCity'.
        */
	return $this->gameCity;
    }
        
    /*
        Method to modify the attribute 'gameCity' of the class.
    */
    public function __setGameCity($gameCity){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameCity'.
        */
	$this->gameCity = $gameCity;
    }
        
    /*
        Method to verify the attribute 'gameLocation' of the class.
    */
    public function __getGameLocation(){
        
        /* 
            Return the value in the attribute 'gameLocation'.
        */
	return $this->gameLocation;
    }
        
    /*
        Method to modify the attribute 'gameLocation' of the class.
    */
    public function __setGameLocation($gameLocation){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameLocation'.
        */
	$this->gameLocation = $gameLocation;
    }
        
    /*
        Method to verify the attribute 'gameDate' of the class.
    */
    public function __getGameDate(){
        
        /* 
            Return the value in the attribute 'gameDate'.
        */
	return $this->gameDate;
    }
        
    /*
        Method to modify the attribute 'gameDate' of the class.
    */
    public function __setGameDate($gameDate){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameDate'.
        */
	$this->gameDate = $gameDate;
    }
        
    /*
        Method to verify the attribute 'gameTime' of the class.
    */
    public function __getGameTime(){
        
        /* 
            Return the value in the attribute 'gameTime'.
        */
	return $this->gameTime;
    }
        
    /*
        Method to modify the attribute 'gameTime' of the class.
    */
    public function __setGameTime($gameTime){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameDate'.
        */
	$this->gameTime = $gameTime;
    }
        
    /*
        Method to verify the attribute 'gameDuration' of the class.
    */
    public function __getGameDuration(){
        
        /* 
            Return the value in the attribute 'gameDuration'.
        */
	return $this->gameDuration;
    }
        
    /*
        Method to modify the attribute 'gameDuration' of the class.
    */
    public function __setGameDuration($gameDuration){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'gameDuration'.
        */
	$this->gameDuration = $gameDuration;
    }
        
    /*
        Method to verify the attribute 'total7Meters' of the class.
    */
    public function __getTotal7Meters(){
        
        /* 
            Return the value in the attribute 'total7Meters'.
        */
	return $this->total7Meters;
    }
        
    /*
        Method to modify the attribute 'total7Meters' of the class.
    */
    public function __setTotal7Meters($total7Meters){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'total7Meters'.
        */
    	$this->total7Meters = $total7Meters;
    }
}