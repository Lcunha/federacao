<?php

include_once("../../../federac/controller/TimeController.php");
include_once("../../../federac/persistence/TimeDAO.php");

class TimeControllerTest extends PHPUnit_Framework_TestCase{
    
    protected $timeTest;
    protected $timeDaoTest;
  
    protected function setUp() {
        $this->timeTest = new Time();
        $this->timeDaoTest = new TimeDAO();
    }

    protected function tearDown() {
        unset($this->timeTest);
        unset($this->timeDaoTest);
    }
/*
   public function testInsertGame(){
       $result = $this->timeDaoTest->insertGame(-2);
       $this->assertFalse($result);
   }
  */
    
}
?>
