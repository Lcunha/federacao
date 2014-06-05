<?php

include_once("/../../controller/TimeController.php");
include_once("/../../persistence/TimeDAO.php");

class TimeControllerTest extends PHPUnit_Framework_TestCase{
    
    protected $timeTest;
    protected $timeDaoTest;
  
    protected function setUp() {
        $this->timeTest = new Time(5, 2, 'jogador', 4, 6, 7, 8);
        $this->timeDaoTest = new TimeDAO();
    }

    protected function tearDown() {
        unset($this->timeTest);
        unset($this->timeDaoTest);
    }

   public function testInsertGame(){
       $result = $this->timeDaoTest->insertGame($this->timeTest);
       $this->assertTrue($result);
   }
   
    public function testUpdateTime(){
       $result = $this->timeDaoTest->insertGame($this->timeTest);
       $this->assertTrue($result);
   }
   
    public function testInsertGoalsTeam1(){
       $result = $this->timeDaoTest->insertGoalsTeam1(3, 4, 6);
       $this->assertTrue($result);
   }
   
    public function testInsertGoalsTeam2(){
       $result = $this->timeDaoTest->insertGoalsTeam2(7, 67);
       $this->assertTrue($result);
   }
   
    public function testDeletePlayer(){
       $result = $this->timeDaoTest->insertGame($this->timeTest);
       $this->assertTrue($result);
   }
   
  
    
}
?>
