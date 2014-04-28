<?php

/* 
    Name: Tempo.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the time, time spends in a game. The time must contains 
    'idTimePlay', 'idPlayer', 'type', 'amountPunishment', 'warning', 'amountDisqualification', 
    'amountReports', 'amountSevenMetersTotal', 'tempoTecnico', 'scoreboardTeam1' and 'scoreboardTeam2'. 
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
    private $tempoTecnico;
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
    public function __constructOverload($idTimePlay, $idPlayer, $type, $amountSevenMetersTotal, $tempoTecnico,
                                        $scoreboardTeam1, $scoreboardTeam2){
	$this->idTimePlay = $idTimePlay;
	$this->idPlayer = $idPlayer;
	$this->type = $type;
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
	$this->tempoTecnico = $tempoTecnico;
	$this->scoreboardTeam1 = $scoreboardTeam1;
	$this->scoreboardTeam2 = $scoreboardTeam2;
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
        Method to verify the attribute 'type' of the class.
    */
    public function __getType(){
	return $this->type;
    }
        
    /*
        Method to modify the attribute 'type' of the class.
    */
    public function __setType($type){
    	$this->type = $type;
    }
        
    /*
        Method to verify the attribute 'avertencia' of the class.
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
        Method to verify the attribute 'amountSevenMetersTotal' of the class.
    */
    public function __getTiro7Metros(){
	return $this->amountSevenMetersTotal;
    }
        
    /*
        Method to modify the attribute 'amountSevenMetersTotal' of the class.
    */
    public function __setTiro7Metros($amountSevenMetersTotal){
	$this->amountSevenMetersTotal = $amountSevenMetersTotal;
    }
        
    /*
        Method to verify the attribute 'tempoTecnico' of the class.
    */
    public function __getTempoTecnico(){
    	return $this->tempoTecnico;
    }
        
    /*
        Method to modify the attribute 'tempoTecnico' of the class.
    */
    public function __setTempoTecnico($tempoTecnico){
	$this->tempoTecnico = $tempoTecnico;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam1' of the class.
    */
    public function __getScoreboardTeam1(){
	return $this->scoreboardTeam1;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam1' of the class.
    */
    public function __setScoreboardTeam1($scoreboardTeam1){
	$this->scoreboardTeam1 = $scoreboardTeam1;
    }
        
    /*
        Method to verify the attribute 'scoreboardTeam2' of the class.
    */
    public function __getScoreboardTeam2(){
	return $this->scoreboardTeam2;
    }
        
    /*
        Method to modify the attribute 'scoreboardTeam2' of the class.
    */
    public function __setScoreboardTeam2($scoreboardTeam2){
	$this->scoreboardTeam2 = $scoreboardTeam2;
    }
}