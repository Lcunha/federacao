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
        Overload construct.
    */
    public function __constructOverload($idCoach, $coachName, $coachPhone, $coachCpf){
    	$this->idCoach = $idCoach;
	$this->coachName = $coachName;
	$this->coachPhone = $coachPhone;
	$this->coachCpf = $coachCpf;
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
            This defines that the new value that the program put on the attribute will be now the
            value of the attribute, in this case 'idCoach'.
        */
	$this->idCoach = $idCoach;
    }
        
    /*
        Method to verify the attribute 'coachName' of the class.
    */
    public function __getCoachName(){
        
        /* 
            Return the value in the attribute 'coachName'.
        */
	return $this->coachName;
    }
        
    /*
        Method to modify the attribute 'coachName' of the class.
    */
    public function __setCoachName($coachName){
        
        /*
            This defines that the new value that the program put on the attribute will be now the
            value of the attribute, in this case 'coachName'.
        */
	$this->coachName = $coachName;
    }
        
    /*
        Method to verify the attribute 'coachPhone' of the class.
    */
    public function __getCoachPhone(){
        
        /* 
            Return the value in the attribute 'coachPhone'.
        */
	return $this->coachPhone;
    }
        
    /*
        Method to modify the attribute 'coachPhone' of the class.
    */
    public function __setCoachPhone($coachPhone){
        
        /*
            This defines that the new value that the program put on the attribute will be now the
            value of the attribute, in this case 'coachPhone'.
        */
	$this->coachPhone = $coachPhone;
    }
        
    /*
        Method to verify the attribute 'coachCpf' of the class.
    */
    public function __getCoachCpf(){
        
        /* 
            Return the value in the attribute 'coachCpf'.
        */
	return $this->coachCpf;
    }
        
    /*
        Method to modify the attribute 'coachCpf' of the class.
    */
    public function __setCoachCpf($coachCpf){
        
        /*
            This defines that the new value that the program put on the attribute will be now the
            value of the attribute, in this case 'coachCpf'.
        */
	$this->coachCpf = $coachCpf;
    }
}