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
        Method to verify the attribute 'idTeam' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdTeam(){
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
        Method to verify the attribute 'idCoach' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdCoach(){
	return $this->idCoach;
    }
        
    /*
        Method to modify the attribute 'idCoach' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setIdCoach($idCoach){
	$this->idCoach = $idCoach;
    }
        
    /*
        Method to verify the attribute 'teamName' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTeamName(){
	return $this->teamName;
    }
        
    /*
        Method to modify the attribute 'teamName' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamName($teamName){
	$this->teamName = $teamName;
    }
        
    /*
        Method to verify the attribute 'teamCategory' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTeamCategory(){
	return $this->teamCategory;
    }
        
    /*
        Method to modify the attribute 'teamCategory' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamCategory($teamCategory){
	$this->teamCategory = $teamCategory;
    }	
	
    /*
        Method to verify the attribute 'teamAddress' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTeamAddress(){
    	return $this->teamAddress;
    }
        
    /*
        Method to modify the attribute 'teamAddress' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamAddress($teamAddress){
	$this->teamAddress = $teamAddress;
    }
        
    /*
        Method to verify the attribute 'teamFoundationDate' of the class. This function returns the  
        value in the attribute.
    */
    public function __getTeamFoundationDate(){
	return $this->teamFoundationDate;
    }
        
    /*
        Method to modify the attribute 'teamFoundationDate' of the class. This function defines that  
        the new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamFoundationDate($teamFoundationDate){
	$this->teamFoundationDate = $teamFoundationDate;
    }
        
    /*
        Method to verify the attribute 'teamPresident' of the class. This function returns the 
        value in the attribute.
    */
    public function __getTeamPresident(){
	return $this->teamPresident;
    }
        
    /*
        Method to modify the attribute 'teamPresident' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamPresident($teamPresident){
	$this->teamPresident = $teamPresident;
    }
        
    /*
        Method to verify the attribute 'teamPhone' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTeamPhone(){
	return $this->teamPhone;
    }
        
    /*
        Method to modify the attribute 'teamPhone' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamPhone($teamPhone){
	$this->teamPhone = $teamPhone;
    }
        
    /*
        Method to verify the attribute 'teamPoints' of the class. This function returns the value 
        in the attribute.
    */
    public function __getTeamPoints(){
	return $this->teamPoints;
    }
        
    /*
        Method to modify the attribute 'teamPoints' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setTeamPoints($teamPoints){
	$this->teamPoints = $teamPoints;
    }
}