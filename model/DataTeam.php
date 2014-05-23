<?php

/* 
    Name: DadosTime.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all team data. The team data must contains 
    'idDataTeam', 'idTeam', 'teamPoints', 'playerTeam', 'victoryTeam', 'drawTeam', 
    'lossTeam', 'amountGoals' and 'concededGoals'. 
*/
class DataTeam {
    private $idDataTeam;
    private $idTeam;
    private $teamPoints;
    private $playerTeam;
    private $victoryTeam;
    private $drawTeam;
    private $lossTeam;
    private $amountGoals;
    private $concededGoals;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){
	
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idDataTeam, $idTeam, $teamPoints, $playerTeam, 
                                        $victoryTeam, $drawTeam, $lossTeam, $amountGoals, 
                                        $concededGoals){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
	$this->idDataTeam = $idDataTeam;
	$this->idTeam = $idTeam;
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
        
        /* 
            Return the value in the attribute 'idDataTeam'.
        */
	return $this->idDataTeam;
    }
        
    /*
        Method to modify the attribute 'idDataTeam' of the class.
    */
    public function __setIdDataTeam($idDataTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idDataTeam'.
        */
    	$this->idDataTeam = $idDataTeam;
    }
        
    /*
        Method to verify the attribute 'idTeam' of the class.
    */
    public function __getIdTeam(){
        
        /* 
            Return the value in the attribute 'idTeam'.
        */
	return $this->idTeam;
    }
        
    /*
        Method to modify the attribute 'idTeam' of the class.
    */
    public function __setIdTeam($idTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idTeam'.
        */
    	$this->idTeam = $idTeam;
    }
        
    /*
        Method to verify the attribute 'teamPoints' of the class.
    */
    public function __getTeamPoints(){
        
        /* 
            Return the value in the attribute 'teamPoints'.
        */
	return $this->teamPoints;
    }
        
    /*
        Method to modify the attribute 'teamPoints' of the class.
    */
    public function __setTeamPoints($teamPoints){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamPoints'.
        */
	$this->teamPoints = $teamPoints;
    }
        
    /*
        Method to verify the attribute 'playerTeam' of the class.
    */
    public function __getPlayerTeam(){
        
        /* 
            Return the value in the attribute 'playerGame'.
        */
	return $this->playerTeam;
    }
       
    /*
        Method to modify the attribute 'playerTeam' of the class.
    */
    public function __setPlayerTeam($playerTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'playerTeam'.
        */
    	$this->playerTeam = $playerTeam;
    }
        
    /*
        Method to verify the attribute 'victoryTeam' of the class.
    */
    public function __getVictoryTeam(){
        
        /* 
            Return the value in the attribute 'victoryGame'.
        */
	return $this->victoryTeam;
	}
        
    /*
        Method to modify the attribute 'victoryTeam' of the class.
    */
    public function __setVictoryTeam($victoryTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'victoryTeam'.
        */
    	$this->victoryTeam = $victoryTeam;
    }
        
    /*
        Method to verify the attribute 'drawTeam' of the class.
    */
    public function __getDrawTeam(){
        
        /* 
            Return the value in the attribute 'drawTeam'.
        */
    	return $this->drawTeam;
    }
        
    /*
        Method to modify the attribute 'drawTeam' of the class.
    */
    public function __setDrawTeam($drawTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'drawTeam'.
        */
	$this->drawTeam = $drawTeam;
    }
        
    /*
        Method to verify the attribute 'lossTeam' of the class.
    */
    public function __getLossTeam(){
        
        /* 
            Return the value in the attribute 'lossTeam'.
        */
	return $this->lossTeam;
    }
        
    /*
        Method to modify the attribute 'lossTeam' of the class.
    */
    public function __setLossTeam($lossTeam){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'lossTeam'.
        */
	$this->lossTeam = $lossTeam;
    }
        
    /*
        Method to verify the attribute 'amountGoals' of the class.
    */
    public function __getAmountGoals(){
        
        /* 
            Return the value in the attribute 'amountGoals'.
        */
	return $this->amountGoals;
    }
        
    /*
        Method to modify the attribute 'amountGoals' of the class.
    */
    public function __setAmountGoals($amountGoals){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'amountGoals'.
        */
    	$this->amountGoals = $amountGoals;
    }
        
    /*
        Method to verify the attribute 'concededGoals' of the class.
    */
    public function __getConcededGoals(){
        
        /* 
            Return the value in the attribute 'concededGoals'.
        */
	return $this->concededGoals;
    }
        
    /*
        Method to modify the attribute 'concededGoals' of the class.
    */
    public function __setConcededGoals($concededGoals){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'concededGoals'.
        */
	$this->concededGoals = $concededGoals;
    }
}