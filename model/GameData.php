<?php

/* 
    Name: GameData.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all game data. The data must contains 'idGameData', 
    'idPlayer','idTimePlay' 'warning', 'punishment', 'disqualification', 
    'numberReports' and 'gameGoals'. 
*/
class GameData{
    private $idGameData;
    private $idPlayer;
    private $idTimePlay;
    private $warning;
    private $punishment;
    private $disqualification;
    private $numberReports;
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
    public function __constructOverload($idGameData, $idPlayer, $idTimePlay, $warning, $punishment,
                                        $disqualification, $numberReports, $gameGoals){
	$this->idGameData = $idGameData;
    	$this->idPlayer = $idPlayer;
	$this->idTimePlay = $idTimePlay;
	$this->warning = $warning;
	$this->punishment = $punishment;
	$this->disqualification = $disqualification;
	$this->numberReports = $numberReports;
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
        Method to verify the attribute 'warning' of the class.
    */
    public function __getWarning(){
	return $this->warning;
    }
        
    /*
        Method to modify the attribute 'warning' of the class.
    */
    public function __setWarning($warning){
	$this->warning = $warning;
    }
        
    /*
        Method to verify the attribute 'punishment' of the class.
    */
    public function __getPunishment(){
	return $this->punishment;
    }
        
    /*
        Method to modify the attribute 'punishment' of the class.
    */
    public function __setPunishment($punishment){
	$this->punishment = $punishment;
    }
        
    /*
        Method to verify the attribute 'disqualification' of the class.
    */
    public function __getDisqualification(){
	return $this->disqualification;
    }
        
    /*
        Method to modify the attribute 'disqualification' of the class.
    */
    public function __setDisqualification($disqualification){
	$this->disqualification = $disqualification;
    }
        
    /*
        Method to verify the attribute 'numberReports' of the class.
    */
    public function __getNumberReports(){
	return $this->numberReports;
    }
        
    /*
        Method to modify the attribute 'numberReports' of the class.
    */
    public function __setNumberReports($numberReports){
	$this->numberReports = $numberReports;
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