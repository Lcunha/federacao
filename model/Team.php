<?php

/* 
    Name: Team.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a team. The team must contains 'idTeam', 'idCoach',  
    'teamName', 'teamCategory', 'teamAddress', 'teamFoundationDate', 'teamPresident', 'teamPhone'  
    and 'teamPoints'. 
*/
class Team{
    private $idTeam;
    private $idCoach;
    private $teamName;
    private $teamCategory;
    private $teamAddress;
    private $teamFoundationDate;
    private $teamPresident;
    private $teamPhone;
    private $teamPoints;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){

    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idTeam, $idCoach, $teamName, $teamCategory, $teamAddress, 
                                        $teamFoundationDate, $teamPresident, $teamPhone){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
	$this->idTeam = $idTeam;
	$this->idCoach = $idCoach;
	$this->teamName = $teamName;
	$this->teamCategory = $teamCategory;
	$this->teamAddress = $teamAddress;
	$this->teamFoundationDate = $teamFoundationDate;
	$this->teamPresident = $teamPresident;
	$this->teamPhone = $teamPhone;
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
        Method to verify the attribute 'idCoach' of the class.
    */
    public function __getIdCoach(){
        
        /* 
            Return the value in the attribute 'idCoach'.
        */
	return $this->idCoach;
    }
        
    /*
        Method to modify the attribute 'idCoach' of the class.
    */
    public function __setIdCoach($idCoach){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'idCoach'.
        */
	$this->idCoach = $idCoach;
    }
        
    /*
        Method to verify the attribute 'teamName' of the class.
    */
    public function __getTeamName(){
        
        /* 
            Return the value in the attribute 'teamName'.
        */
	return $this->teamName;
    }
        
    /*
        Method to modify the attribute 'teamName' of the class.
    */
    public function __setTeamName($teamName){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamName'.
        */
	$this->teamName = $teamName;
    }
        
    /*
        Method to verify the attribute 'teamCategory' of the class.
    */
    public function __getTeamCategory(){
        
        /* 
            Return the value in the attribute 'teamCategory'.
        */
	return $this->teamCategory;
    }
        
    /*
        Method to modify the attribute 'teamCategory' of the class.
    */
    public function __setTeamCategory($teamCategory){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamCategory'.
        */
	$this->teamCategory = $teamCategory;
    }	
	
    /*
        Method to verify the attribute 'teamAddress' of the class.
    */
    public function __getTeamAddress(){
        
        /* 
            Return the value in the attribute 'teamAddress'.
        */
    	return $this->teamAddress;
    }
        
    /*
        Method to modify the attribute 'teamAddress' of the class.
    */
    public function __setTeamAddress($teamAddress){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamAddress'.
        */
	$this->teamAddress = $teamAddress;
    }
        
    /*
        Method to verify the attribute 'teamFoundationDate' of the class.
    */
    public function __getTeamFoundationDate(){
        
        /* 
            Return the value in the attribute 'teamFoundationDate'.
        */
	return $this->teamFoundationDate;
    }
        
    /*
        Method to modify the attribute 'teamFoundationDate' of the class.
    */
    public function __setTeamFoundationDate($teamFoundationDate){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamFoundationDate'.
        */
	$this->teamFoundationDate = $teamFoundationDate;
    }
        
    /*
        Method to verify the attribute 'teamPresident' of the class.
    */
    public function __getTeamPresident(){
        
        /* 
            Return the value in the attribute 'teamPresident'.
        */
	return $this->teamPresident;
    }
        
    /*
        Method to modify the attribute 'teamPresident' of the class.
    */
    public function __setTeamPresident($teamPresident){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamPresident'.
        */
	$this->teamPresident = $teamPresident;
    }
        
    /*
        Method to verify the attribute 'teamPhone' of the class.
    */
    public function __getTeamPhone(){
        
        /* 
            Return the value in the attribute 'teamPhone'.
        */
	return $this->teamPhone;
    }
        
    /*
        Method to modify the attribute 'teamPhone' of the class.
    */
    public function __setTeamPhone($teamPhone){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute, in this case 'teamPhone'.
        */
	$this->teamPhone = $teamPhone;
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
}