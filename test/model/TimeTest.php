<?php

include_once("../../model/Time.php");


class TimeTest extends PHPUnit_Framework_TestCase{
    
    protected $timeTest;

    protected function setUp() {
        $this->timeTest = new Time();
    }
   
     protected function tearDown() {
        unset($this->timeTest);
    }
    
      public function testSeIdTimePlay() {
        $this->timeTest->__setIdPlayer(11);
        $result = $this->timeTest->__getIdPlayer();
        $this->assertEquals(11,$result);
    }

    public function testSetIdTimePlay(){
        $this->timeTest->__setIdTimePlay(2);
        $result = $this->timeTest->__getIdTimePlay();
        $this->assertEquals(2,$result);
    }
    
    public function testSetType(){
        $this->timeTest->__setType('tempo');
        $result = $this->timeTest->__getType();
        $this->assertEquals('tempo', $result);
    }
    
    public function testSetamountWarning(){
        $this->timeTest->__setAmountWarning(7);
        $result = $this->timeTest->__getAmountWarning();
        $this->assertEquals(7,$result);
    }
    
    public function testSetAmountPunishment(){
        $this->timeTest->__setAmountPunishment(1);
        $result = $this->timeTest->__getAmountPunishment();
        $this->assertEquals(1,$result);
    }
    
    public function testSetAmountDisqualification(){
        $this->timeTest->__setAmountDisqualification(8);
        $result = $this->timeTest->__getAmountDisqualification();
        $this->assertEquals(8,$result);
    }
 
    public function testSetAmountReports(){
        $this->timeTest->__setAmountReports(87);
        $result = $this->timeTest->__getAmountReports();
        $this->assertEquals(87, $result);
    }
    
    public function testSetAmountSevenMetersTotal(){
        $this->timeTest->__setAmountSevenMetersTotal(6);
        $result = $this->timeTest->__getAmountSevenMetersTotal();
        $this->assertEquals(6, $result);
    }
    
    public function testSetTimeCoach(){
        $this->timeTest->__setTimeCoach(898);
        $result = $this->timeTest->__getTimeCoach();
        $this->assertEquals(898, $result);
    }
    
    public function testeSetScoreboardTeam1(){
        $this->timeTest->__setScoreboardTeam1(3);
        $result = $this->timeTest->__getScoreboardTeam1();
        $this->assertEquals(3, $result);
    }
    public function testSetScoreboardTeam2(){
        $this->timeTest->__setScoreboardTeam2(2);
        $result = $this->timeTest->__getScoreboardTeam2();
        $this->assertEquals(2, $result);
        
    }
    
    
}
?>
