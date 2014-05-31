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


}
?>
