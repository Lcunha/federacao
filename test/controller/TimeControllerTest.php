<?php

include_once("../../../federac/controller/TimeController.php");
include_once("../../../federac/persistence/TimeDAO.php");

class TimeControllerTest extends PHPUnit_Framework_TestCase{

     protected $timeDAOTest;
    
     

    protected function setUp() {
        $this->timeDAOTest = new TimeDAO();
    }
    
    protected function tearDown() {
        unset($this->timeDAOTest);    
    }
    
   public function testSaveTime() {
      // $return = $this->timeDAOTest->('idTeam', 'idPlayer', 'amountSevenMetersTotal', 'timeCoach', 
        //                             'scoreboardTeam1', 'scoreboardTeam', 'type');
       // $this->assertTrue($return);
    }

}
?>
