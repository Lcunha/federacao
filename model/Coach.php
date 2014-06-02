<?php

/* 
    Name: Coach.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a coach. The coach must contains 'idCoach', 'coachName',
    'coachPhone' and 'coachCpf'. 
*/
class Coach{
    private $idCoach;
    private $coachName;
    private $coachPhone;
    private $coachCpf;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){
		
    }
        
    /*
        Overload construct.This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
    */
    public function __constructOverload($idCoach, $coachName, $coachPhone, $coachCpf){
        
    	$this->idCoach = $idCoach;
	$this->coachName = $coachName;
	$this->coachPhone = $coachPhone;
	$this->coachCpf = $coachCpf;
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
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setIdCoach($idCoach){
	$this->idCoach = $idCoach;
    }
        
    /*
        Method to verify the attribute 'coachName' of the class. This function returns the value 
        in the attribute.
    */
    public function __getCoachName(){
	return $this->coachName;
    }
        
    /*
        Method to modify the attribute 'coachName' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setCoachName($coachName){
	$this->coachName = $coachName;
    }
        
    /*
        Method to verify the attribute 'coachPhone' of the class. This function returns the value 
        in the attribute.
    */
    public function __getCoachPhone(){
	return $this->coachPhone;
    }
        
    /*
        Method to modify the attribute 'coachPhone' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setCoachPhone($coachPhone){
	$this->coachPhone = $coachPhone;
    }
        
    /*
        Method to verify the attribute 'coachCpf' of the class. This function returns the value 
        in the attribute.
    */
    public function __getCoachCpf(){
	return $this->coachCpf;
    }
        
    /*
        Method to modify the attribute 'coachCpf' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of 
        the attribute.
    */
    public function __setCoachCpf($coachCpf){
	$this->coachCpf = $coachCpf;
    }
}