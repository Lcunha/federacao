<?php

/* 
    Name: DadosTime.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all team data. The team data must contains 
    'idDataTeam', 'Team', 'teamPoints', 'playerTeam', 'victoryTeam', 'empates', 'derrotas',
    'gols' and 'golsLevados'. 
*/
class DataTeam{
    
    private $idDataTeam;
    private $Team;
    private $teamPoints;
    private $playerTeam;
    private $victoryTeam;
    private $drawTeam;
    private $lossTeam;
    private $amountGoals;
    private $concededGoals;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
	
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idDataTeam, $Team, $teamPoints, $playerTeam, $victoryTeam,
                                        $drawTeam, $lossTeam, $amountGoals, $concededGoals){
	$this->idDataTeam = $idDataTeam;
	$this->Team = $Team;
	$this->teamPoints = $teamPoints ;
	$this->playerTeam = $playerTeam;
	$this->victoryTeam = $victoryTeam;
	$this->drawTeam = $drawTeam;
	$this->lossTeam = $lossTeam;
	$this->amountGoals = $amountGoals;
	$this->concededGoals = $concededGoals;
    }
        
    /*
        Method to verify the attribute 'idDataTeam' of the class.
    */
    public function __getIdDataTeam(){
	return $this->idDataTeam;
    }
        
    /*
        Method to modify the attribute 'idDataTeam' of the class.
    */
    public function __setIdDataTeam($idDataTeam){
    	$this->idDataTeam = $idDataTeam;
    }
        
    /*
        Method to verify the attribute 'Team' of the class.
    */
    public function __getTeam(){
	return $this->Team;
    }
        
    /*
        Method to modify the attribute 'Team' of the class.
    */
    public function __setTeam($Team){
    	$this->Team = $Team;
    }
        
    /*
        Method to verify the attribute 'teamPoints' of the class.
    */
    public function __getTeamPoints(){
	return $this->teamPoints;
    }
        
    /*
        Method to modify the attribute 'teamPoints' of the class.
    */
    public function __setTeamPoints($teamPoints){
	$this->teamPoints = $teamPoints;
    }
        
    /*
        Method to verify the attribute 'playerTeam' of the class.
    */
    public function __getJogos(){
	return $this->playerTeam;
    }
       
    /*
        Method to modify the attribute 'playerTeam' of the class.
    */
    public function __setPlayerTeam($playerTeam){
    	$this->playerTeam = $playerTeam;
    }
        
    /*
        Method to verify the attribute 'victoryTeam' of the class.
    */
    public function __getVictoryTeam(){
	return $this->victoryTeam;
	}
        
    /*
        Method to modify the attribute 'victoryTeam' of the class.
    */
    public function __setVictoryTeam($victoryTeam){
    	$this->victoryTeam = $victoryTeam;
    }
        
    /*
        Method to verify the attribute 'empates' of the class.
    */
    public function __getDrawTeam(){
    	return $this->drawTeam;
    }
        
    /*
        Method to modify the attribute 'empates' of the class.
    */
    public function __setdrawTeam($drawTeam){
	$this->drawTeam = $drawTeam;
    }
        
    /*
        Method to verify the attribute 'derrotas' of the class.
    */
    public function __getLossTeam(){
	return $this->lossTeam;
    }
        
    /*
        Method to modify the attribute 'derrotas' of the class.
    */
    public function __setLossTeam($lossTeam){
	$this->lossTeam = $lossTeam;
    }
        
    /*
        Method to verify the attribute 'gols' of the class.
    */
    public function __getAmountGoals(){
	return $this->amountGoals;
    }
        
    /*
        Method to modify the attribute 'gols' of the class.
    */
    public function __setAmountGoals($amountGoals){
    	$this->amountGoals = $amountGoals;
    }
        
    /*
        Method to verify the attribute 'golsLevados' of the class.
    */
    public function __getConcededGoals(){
	return $this->concededGoals;
    }
        
    /*
        Method to modify the attribute 'golsLevados' of the class.
    */
    public function __setConcededGoals($concededGoals){
	$this->concededGoals = $concededGoals;
    }
}