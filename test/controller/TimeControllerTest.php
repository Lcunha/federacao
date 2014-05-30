<?php

require_once "../../controller/TimeController.php";
require_once "../../persistence/TimeDAO.php";
require_once "../../model/Time.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TimeControllerTest extends PHPUnit_Framework_TestCase{

     protected $timeDAOTest;
     

    protected function setUp() {
        $this->timeDAOTest = new TimeDAO();
    }
    
    protected function tearDown() {
        unset($this->timeDAOTest);    
    }
    
    public function testSaveTime() {
        $return = $this->timeDAOTest->saveTime('idTeam', 'idPlayer', 'amountSevenMetersTotal', 'timeCoach', 
                                                'scoreboardTeam1', 'scoreboardTeam', 'type');
        $this->assertTrue($return);
    }
 
}
?>
