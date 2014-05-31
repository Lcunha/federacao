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
        Overload construct. This defines that the new value that the program or the user put on the attribute will 
       be now the value of the attribute.
    */
    public function __constructOverload($idTimePlay, $idPlayer, $type, $amountSevenMetersTotal, 
                                        $timeCoach, $scoreboardTeam1, $scoreboardTeam2){
    
	$this->idTimePlay = $idTimePlay;
	$this->idPlayer = $idPlayer;
	$this->type = $type;
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
	$this->timeCoach = $timeCoach;
	$this->scoreboardTeam1 = $scoreboardTeam1;
	$this->scoreboardTeam2 = $scoreboardTeam2;
    }
        
    /*
        Method to verify the attribute 'idTimePlay' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdTimePlay(){
	return $this->idTimePlay;
    }
        
    /*
        Method to modify the attribute 'idTimePlay' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setIdTimePlay($idTimePlay){
	$this->idTimePlay = $idTimePlay;
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
        Method to verify the attribute 'type' of the class. This function returns the value 
        in the attribute.
    */
    public function __getType(){
	return $this->type;
    }
        
    /*
        Method to modify the attribute 'type' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setType($type){
    	$this->type = $type;
    }
        
    /*
        Method to verify the attribute 'amountWarning' of the class. This function returns the 
        value in the attribute.
    */
    public function __getAmountWarning(){
	return $this->amountWarning;
    }
        
    /*
        Method to modify the attribute 'amountWarning' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setAmountWarning($amountWarning){
	$this->amountWarning = $amountWarning;
    }
        
    /*
        Method to verify the attribute 'amountPunishment' of the class. This function returns the  
        value in the attribute.
    */
    public function __getAmountPunishment(){
	return $this->amountPunishment;
    }
        
    /*
        Method to modify the attribute 'amountPunishment' of the class. This function defines that 
        the new value that the program or the user put on the attribute will be now the value of
        the attribute.
    */
    public function __setAmountPunishment($amountPunishment){
	$this->amountPunishment = $amountPunishment;
    }
        
    /*
        Method to verify the attribute 'amountDisqualification' of the class. This function returns 
        te value in the attribute.
    */
    public function __getAmountDisqualification(){
	return $this->amountDisqualification;
    }
        
    /*
        Method to modify the attribute 'amountDisqualification' of the class. This function defines
        that the new value that the program or the user put on the attribute will be now the value 
        of the attribute.
    */
    public function __setAmountDisqualification($amountDisqualification){
	$this->amountDisqualification = $amountDisqualification;
    }
        
    /*
        Method to verify the attribute 'amountReports' of the class. This function returns the 
        value in the attribute.
    */
    public function __getAmountReports(){
	return $this->amountReports;
    }
        
    /*
        Method to modify the attribute 'amountReports' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setAmountReports($amountReports){
	$this->amountReports = $amountReports;
    }
        
    /*
        Method to verify the attribute 'amountSevenMetersTotal' of the class. This function returns 
        value in the attribute.
    */
    public function __getAmountSevenMetersTotal(){
	return $this->amountSevenMetersTotal;
    }
        
    /*
        Method to modify the attribute 'amountSevenMetersTotal' of the class. This function defines
        that the new value that the program or the user put on the attribute will be now the value 
        of the attribute.
    */
    public function __setAmountSevenMetersTotal($amountSevenMetersTotal){
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
    }
        
    /*
        Method to verify the attribute 'timeCoach' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTimeCoach(){
    	return $this->timeCoach;
    }
        
    /*
        Method to modify the attribute 'timeCoach' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTimeCoach($timeCoach){
	$this->timeCoach = $timeCoach;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam1' of the class. This function returns the
        value in the attribute.
    */
    public function __getScoreboardTeam1(){
	return $this->scoreboardTeam1;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam1' of the class. This function defines that 
        the new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setScoreboardTeam1($scoreboardTeam1){
	$this->scoreboardTeam1 = $scoreboardTeam1;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam2' of the class. This function returns the  
        value in the attribute.
    */
    public function __getScoreboardTeam2(){
	return $this->scoreboardTeam2;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam2' of the class. This function defines that 
        the new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setScoreboardTeam2($scoreboardTeam2){
	$this->scoreboardTeam2 = $scoreboardTeam2;
    }
}