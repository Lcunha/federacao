<?php

/*
    Name: Referee.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a referee. A referee must contains 'idReferee', 'refereeName',
    'refereePhone' and 'refereeCpf'.
*/
class Referee{
    private $idReferee;
    private $refereeName;
    private $refereePhone;
    private $refereeCpf;

    /*
        Default construct declaration. Using constructor methods is appropriate for any 
        initialization that the object may need before being used.
    */
    public function __construct(){
   
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idReferee, $refereeName, $refereePhone, $refereeCpf){
        
        /*
            This defines that the new value that the program or the user put on the attribute will 
            be now the value of the attribute.
        */
	$this->idReferee = $idReferee;
	$this->refereeName = $refereeName;
	$this->refereePhone = $refereePhone;
	$this->refereeCpf = $refereeCpf;
    }
        
    /*
        Method to verify the attribute 'idAtributo' of the class. This function returns the value 
        in the attribute.
    */
    public function __getIdReferee(){
    	return $this->idReferee;
    }

    /*
       Method to modify the attribute 'idAtributo' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setIdReferee($idReferee){
	$this->idReferee = $idReferee;
    }
        
    /*
        Method to verify the attribute 'refereeName' of the class. This function returns the value 
        in the attribute.
    */
    public function __getRefereeName(){
	return $this->refereeName;
    }
        
    /*
        Method to modify the attribute 'refereeName' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setRefereeName($refereeName){
	$this->refereeName = $refereeName;
    }

    /*
         Method to verify the attribute 'refereePhone' of the class. This function returns the  
        value in the attribute.
    */
    public function __getRefereePhone(){
    	return $this->refereePhone;
    }
        
    /*
        Method to modify the attribute 'refereePhone' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setRefereePhone($refereePhone){
	$this->refereePhone = $refereePhone;
    }
        
    /*
        Method to verify the attribute 'refereeCpf' of the class. This function returns the value 
        in the attribute.
    */
    public function __getRefereeCpf(){
	return $this->refereeCpf;
    }
        
    /*
        Method to modify the attribute 'refereeCpf' of the class. This function defines that the 
        new value that the program or the user put on the attribute will be now the value of the
        attribute.
    */
    public function __setRefereeCpf($refereeCpf){
    	$this->refereeCpf = $refereeCpf;
    }
}
