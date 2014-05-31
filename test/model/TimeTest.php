<?php

include_once("../../../federac/model/Time.php");
include_once("../../../federac/persistence/TimeDAO.php");

class TimeTest extends PHPUnit_Framework_TestCase{
    
    protected $timeTest;
    protected $timeDAOTest;
    

    protected function setUp() {
        $this->timeTest = new Time();
                //'idTimePlay', 'idPlayer', 'type', 'amountSevenMetersTotal', 
                  //                      'timeCoach', 'scoreboardTeam1', 'scoreboardTeam2');
        $this->timeDAOTest = new TimeDAO();
    }
   
     protected function tearDown() {
        unset($this->timeTest);
        unset($this->timeDAOTest);  
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
}
?>
