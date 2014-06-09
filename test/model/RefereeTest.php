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
    
     public function testGetInstanceRefereeTestNotNull() {
        $this->assertNotNull($this->refereeTest);
    }
   
   
    public function testSetIdReferee(){
	$this->refereeTest->__setIdReferee(2);
        $result = $this->refereeTest->__getIdReferee();
        $this->assertEquals(2,$result);
    }
        
    public function testSetRefereeName(){
	$this->refereeTest->__setRefereeName('Joao');
        $result = $this->refereeTest->__getRefereeName();
        $this->assertEquals('Joao',$result);
    }
    
   
    public function testSetRefereePhone(){
	$this->refereeTest->__setRefereePhone('33330000');
        $result = $this->refereeTest->__getRefereePhone();
        $this->assertEquals('33330000',$result);
    }
    public function testSetRefereeCpf(){
    	$this->refereeTest->__setRefereeCpf('93784-2');
        $result = $this->refereeTest->__getRefereeCpf();
        $this->assertEquals('93784-2',$result);
    }
    
}
