<?php

include_once("/../../model/Referee.php");
include_once("/../../persistence/RefereeDAO.php");

class RefereeTest extends PHPUnit_Framework_TestCase {

    protected $refereeTest;
    
    protected function setUp() {
        $this->refereeTest = new Referee();
    }
   
     protected function tearDown() {
        unset($this->refereeTest); 
    }
   
    public function testSetIdReferee(){
	$this->refereeTest->setIdReferee(2);
        $result = $this->refereeTest->setIdReferee();
        $this->assertEquals(2,$result);
    }
        
    public function testSetRefereeName(){
	$this->refereeTest->setRefereeName('Joao');
        $result = $this->refereeTest->setRefereeName();
        $this->assertEquals('Joao',$result);
    }
    
   
    public function testSetRefereePhone(){
	$this->refereeTest->setRefereePhone('33330000');
        $result = $this->refereeTest->setRefereePhone();
        $this->assertEquals('33330000',$result);
    }
    public function testSetRefereeCpf(){
    	$this->refereeTest->setRefereeCpf('93784-2');
        $result = $this->refereeTest->setRefereeCpf();
        $this->assertEquals('93784-2',$result);
    }
    
}
