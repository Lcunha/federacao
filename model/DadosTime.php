<?php

/* 
    Name: DadosTime.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all team data. The team data must contains 
    'idDataTeam', 'Team', 'teamPoints', 'playerTeam', 'victoryTeam', 'empates', 'derrotas',
    'gols' and 'golsLevados'. 
*/
class DadosTime{
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
    public function __getIdDadosTime(){
	return $this->idDataTeam;
    }
        
    /*
        Method to modify the attribute 'idDataTeam' of the class.
    */
    public function __setIdDadosTime($idDataTeam){
    	$this->idDataTeam = $idDataTeam;
    }
        
    /*
        Method to verify the attribute 'Team' of the class.
    */
    public function __getIdTime(){
	return $this->Team;
    }
        
    /*
        Method to modify the attribute 'Team' of the class.
    */
    public function __setIdTime($Team){
    	$this->Team = $Team;
    }
        
    /*
        Method to verify the attribute 'teamPoints' of the class.
    */
    public function __getPontos(){
	return $this->teamPoints;
    }
        
    /*
        Method to modify the attribute 'teamPoints' of the class.
    */
    public function __setPontos($teamPoints){
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
    public function __setJogos($playerTeam){
    	$this->playerTeam = $playerTeam;
    }
        
    /*
        Method to verify the attribute 'victoryTeam' of the class.
    */
    public function __getVitorias(){
	return $this->victoryTeam;
	}
        
    /*
        Method to modify the attribute 'victoryTeam' of the class.
    */
    public function __setVitorias($victoryTeam){
    	$this->victoryTeam = $victoryTeam;
    }
        
    /*
        Method to verify the attribute 'empates' of the class.
    */
    public function __getEmpates(){
    	return $this->drawTeam;
    }
        
    /*
        Method to modify the attribute 'empates' of the class.
    */
    public function __setEmpates($empates){
	$this->drawTeam = $empates;
    }
        
    /*
        Method to verify the attribute 'derrotas' of the class.
    */
    public function __getDerrotas(){
	return $this->lossTeam;
    }
        
    /*
        Method to modify the attribute 'derrotas' of the class.
    */
    public function __setDerrotas($derrotas){
	$this->lossTeam = $derrotas;
    }
        
    /*
        Method to verify the attribute 'gols' of the class.
    */
    public function __getGols(){
	return $this->amountGoals;
    }
        
    /*
        Method to modify the attribute 'gols' of the class.
    */
    public function __setGols($gols){
    	$this->amountGoals = $gols;
    }
        
    /*
        Method to verify the attribute 'golsLevados' of the class.
    */
    public function __getGolsLevados(){
	return $this->concededGoals;
    }
        
    /*
        Method to modify the attribute 'golsLevados' of the class.
    */
    public function __setGolsLevados($golsLevados){
	$this->concededGoals = $golsLevados;
    }
}