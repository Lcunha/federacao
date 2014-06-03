<?php

include_once("../../model/Referee.php");
include_once("../../persistence/RefereeDAO.php");

class RefereeTest extends PHPUnit_Framework_TestCase {

    protected $refereeTest;
    
    protected function setUp() {
        $this->refereeTest = new Referee();
    }
   
     protected function tearDown() {
        unset($this->refereeTest); 
    }
   
    public function setIdReferee($idReferee){
	$this->refereeTest->setIdReferee(2);
        $result = $this->refereeTest->setIdReferee();
        $this->assertEquals(2,$result);
    }
        
    public function setRefereeName($refereeName){
	$this->refereeTest->setRefereeName('Joao');
        $result = $this->refereeTest->setRefereeName();
        $this->assertEquals('Joao',$result);
    }
    
   
    public function setRefereePhone($refereePhone){
	$this->refereeTest->setRefereePhone('33330000');
        $result = $this->refereeTest->setRefereePhone();
        $this->assertEquals('33330000',$result);
    }
    public function setRefereeCpf($refereeCpf){
    	$this->refereeTest->setRefereeCpf('93784-2');
        $result = $this->refereeTest->setRefereeCpf();
        $this->assertEquals('93784-2',$result);
    }
    
}
