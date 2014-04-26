<?php

/* 
    Name: GameData.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all game data. The data must contains 'idGameData', 
    'idPlayer','idTimePlay' 'amountWarning', 'amountPunishment', 'amountDisqualification', 
    'amountReports' and 'gameGoals'. 
*/
class GameData{
    private $idGameData;
    private $idPlayer;
    private $idTimePlay;
    private $amountWarning;
    private $amountPunishment;
    private $amountDisqualification;
    private $amountReports;
    private $gameGoals;

    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){

    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idGameData, $idPlayer, $idTimePlay, $amountWarning, 
                                        $amountPunishment, $amountDisqualification, $amountReports,
                                        $gameGoals){
	$this->idGameData = $idGameData;
    	$this->idPlayer = $idPlayer;
	$this->idTimePlay = $idTimePlay;
	$this->amountWarning = $amountWarning;
	$this->amountPunishment = $amountPunishment;
	$this->amountDisqualification = $amountDisqualification;
	$this->amountReports = $amountReports;
	$this->gameGoals = $gameGoals;
    }
        
    /*
        Method to verify the attribute 'idGameData' of the class.
    */
    public function __getIdGameData(){
	return $this->idGameData;
    }
        
    /*
        Method to modify the attribute 'idGameData' of the class.
    */
    public function __setIdGameData($idGameData){
	$this->idGameData = $idGameData;
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
        Method to verify the attribute 'idTimePlay' of the class.
    */
    public function __getIdTimePlay(){
	return $this->idTimePlay;
    }
        
    /*
        Method to modify the attribute 'idTimePlay' of the class.
    */
    public function __setIdTimePlay($idTimePlay){
	$this->idTimePlay = $idTimePlay;
    }
        
    /*
        Method to verify the attribute 'amountWarning' of the class.
    */
    public function __getAmountWarning(){
	return $this->amountWarning;
    }
        
    /*
        Method to modify the attribute 'amountWarning' of the class.
    */
    public function __setAmountWarning($amountWarning){
	$this->amountWarning = $amountWarning;
    }
        
    /*
        Method to verify the attribute 'amountPunishment' of the class.
    */
    public function __getAmountPunishment(){
	return $this->amountPunishment;
    }
        
    /*
        Method to modify the attribute 'amountPunishment' of the class.
    */
    public function __setAmountPunishment($amountPunishment){
	$this->amountPunishment = $amountPunishment;
    }
        
    /*
        Method to verify the attribute 'amountDisqualification' of the class.
    */
    public function __getAmountDisqualification(){
	return $this->amountDisqualification;
    }
        
    /*
        Method to modify the attribute 'amountDisqualification' of the class.
    */
    public function __setAmountDisqualification($amountDisqualification){
	$this->amountDisqualification = $amountDisqualification;
    }
        
    /*
        Method to verify the attribute 'amountReports' of the class.
    */
    public function __getAmountReports(){
	return $this->amountReports;
    }
        
    /*
        Method to modify the attribute 'amountReports' of the class.
    */
    public function __setAmountReports($amountReports){
	$this->amountReports = $amountReports;
    }
        
    /*
        Method to verify the attribute 'gameGoals' of the class.
    */
    public function __getGameGoals(){
	return $this->gameGoals;
    }
        
    /*
        Method to modify the attribute 'gameGoals' of the class.
    */
    public function __setGameGoals($gameGoals){
	$this->gameGoals = $gameGoals;
    }
}