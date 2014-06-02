<?php

include_once("../../../federac/model/Coach.php");

class CoachTest extends PHPUnit_Framework_TestCase{
    
    protected $coachTest;

    protected function setUp() {
        $this->coachTest = new Coach();
    }
   
     protected function tearDown() {
        unset($this->coachTest);
    }
 
      public function testSetIdCoach(){
        $this->coachTest->__setIdCoach(4);
        $result = $this->coachTest->__getIdCoach();
        $this->assertEquals(4,$result);
    }
    
     public function testSetCoachName(){
        $this->coachTest->__setCoachName('Mario');
        $result = $this->coachTest->__getCoachName();
        $this->assertEquals('Mario',$result);
    }
    
     public function testSetCoachPhone(){
        $this->coachTest->__setCoachPhone('08');
        $result = $this->coachTest->__getCoachPhone();
        $this->assertEquals('08',$result);
    }
    
    public function testSetCoachCpf(){
        $this->coachTest->__setCoachCpf('93784-2');
        $result = $this->coachTest->__getCoachCpf();
        $this->assertEquals('93784-2',$result);
    }

}


?>
