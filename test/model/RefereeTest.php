<?php

include_once("../../../federac/model/Referee.php");
include_once("../../../federac/persistence/RefereeDAO.php");

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
    /*    
    public function setRefereeName($refereeName){
	$this->refereeName = $refereeName;
    }
    public function setRefereePhone($refereePhone){
	$this->refereePhone = $refereePhone;
    }
    public function setRefereeCpf($refereeCpf){
    	$this->refereeCpf = $refereeCpf;
    }
    */
}