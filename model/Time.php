<?php

/* 
    Name: Tempo.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the time, time spends in a game. The time must contains 
    'idTimePlay', 'idPlayer', 'type', 'amountPunishment', 'amountWarning', 
    'amountDisqualification', 'amountReports', 'amountSevenMetersTotal', 'timeCoach', 
    'scoreboardTeam1' and 'scoreboardTeam2'. 
*/
class Time{
    
    private $idTimePlay;
    private $idPlayer;
    private $type;
    private $amountPunishment;
    private $amountWarning;
    private $amountDisqualification;
    private $amountReports;
    private $amountSevenMetersTotal;
    private $timeCoach;
    private $scoreboardTeam1;
    private $scoreboardTeam2;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
	
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idTimePlay, $idPlayer, $type, $amountSevenMetersTotal, 
                                        $timeCoach, $scoreboardTeam1, $scoreboardTeam2){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
	$this->idTimePlay = $idTimePlay;
	$this->idPlayer = $idPlayer;
	$this->type = $type;
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
	$this->timeCoach = $timeCoach;
	$this->scoreboardTeam1 = $scoreboardTeam1;
	$this->scoreboardTeam2 = $scoreboardTeam2;
    }
        
    /*
        Method to verify the attribute 'idTimePlay' of the class.
    */
    public function __getIdTimePlay(){
        
        /* 
            Return the value in the attribute 'idTimePlay'.
        */
	return $this->idTimePlay;
    }
        
    /*
        Method to modify the attribute 'idTimePlay' of the class.
    */
    public function __setIdTimePlay($idTimePlay){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idTimePlay'.
        */
	$this->idTimePlay = $idTimePlay;
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
        Method to verify the attribute 'type' of the class.
    */
    public function __getType(){
        
        /* 
            Return the value in the attribute 'type'.
        */
	return $this->type;
    }
        
    /*
        Method to modify the attribute 'type' of the class.
    */
    public function __setType($type){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'type'.
        */
    	$this->type = $type;
    }
        
    /*
        Method to verify the attribute 'amountWarning' of the class.
    */
    public function __getAmountWarning(){
        
        /* 
            Return the value in the attribute 'amountWarning'.
        */
	return $this->amountWarning;
    }
        
    /*
        Method to modify the attribute 'amountWarning' of the class.
    */
    public function __setAmountWarning($amountWarning){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountWarning'.
        */
	$this->amountWarning = $amountWarning;
    }
        
    /*
        Method to verify the attribute 'amountPunishment' of the class.
    */
    public function __getAmountPunishment(){
        
        /* 
            Return the value in the attribute 'amountPunishment'.
        */
	return $this->amountPunishment;
    }
        
    /*
        Method to modify the attribute 'amountPunishment' of the class.
    */
    public function __setAmountPunishment($amountPunishment){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountPunishment'.
        */
	$this->amountPunishment = $amountPunishment;
    }
        
    /*
        Method to verify the attribute 'amountDisqualification' of the class.
    */
    public function __getAmountDisqualification(){
        
        /* 
            Return the value in the attribute 'amountDisqualification'.
        */
	return $this->amountDisqualification;
    }
        
    /*
        Method to modify the attribute 'amountDisqualification' of the class.
    */
    public function __setAmountDisqualification($amountDisqualification){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountDisqualification'.
        */
	$this->amountDisqualification = $amountDisqualification;
    }
        
    /*
        Method to verify the attribute 'amountReports' of the class.
    */
    public function __getAmountReports(){
        
        /* 
            Return the value in the attribute 'amountReports'.
        */
	return $this->amountReports;
    }
        
    /*
        Method to modify the attribute 'amountReports' of the class.
    */
    public function __setAmountReports($amountReports){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountReports'.
        */
	$this->amountReports = $amountReports;
    }
        
    /*
        Method to verify the attribute 'amountSevenMetersTotal' of the class.
    */
    public function __getAmountSevenMetersTotal(){
        
        /* 
            Return the value in the attribute 'amountSevenMetersTotal'.
        */
	return $this->amountSevenMetersTotal;
    }
        
    /*
        Method to modify the attribute 'amountSevenMetersTotal' of the class.
    */
    public function __setAmountSevenMetersTotal($amountSevenMetersTotal){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountSevenMetersTotal'.
        */
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
    }
        
    /*
        Method to verify the attribute 'timeCoach' of the class.
    */
    public function __getTimeCoach(){
        
        /* 
            Return the value in the attribute 'timeCoach'.
        */
    	return $this->timeCoach;
    }
        
    /*
        Method to modify the attribute 'timeCoach' of the class.
    */
    public function __setTimeCoach($timeCoach){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'timeCoach'.
        */
	$this->timeCoach = $timeCoach;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam1' of the class.
    */
    public function __getScoreboardTeam1(){
        
        /* 
            Return the value in the attribute 'scoreboardTeam1'.
        */
	return $this->scoreboardTeam1;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam1' of the class.
    */
    public function __setScoreboardTeam1($scoreboardTeam1){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'scoreboardTeam1'.
        */
	$this->scoreboardTeam1 = $scoreboardTeam1;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam2' of the class.
    */
    public function __getScoreboardTeam2(){
        
        /* 
            Return the value in the attribute 'scoreboardTeam2'.
        */
	return $this->scoreboardTeam2;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam2' of the class.
    */
    public function __setScoreboardTeam2($scoreboardTeam2){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'scoreboardTeam2'.
        */
	$this->scoreboardTeam2 = $scoreboardTeam2;
    }
}