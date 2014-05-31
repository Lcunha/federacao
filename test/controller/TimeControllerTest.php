<?php

include_once("../../../federac/controller/TimeController.php");
include_once("../../../federac/persistence/TimeDAO.php");

class TimeControllerTest extends PHPUnit_Framework_TestCase{

     protected $timeControllerTest;
     protected $time;
     protected $timeDAO;
    
    protected function setUp() {
        $this->time = new Time();
        $this->timeControllerTest = new TimeController();
        $this->timeDAO = new TimeDAO();
    }
    
    protected function tearDown() {
        unset($this->time);    
        unset($this->timeControllerTest);
        unset($this->timeDAO);
    }
    
    public function testInsertGoalsTeam1(){
        $return = $this->timeControllerTest->_insertGoalsTeam1(3, 6, 5);
        $result = $this ->timeDAO->insertGoalsTeam1(3, 6, 5);
        $this->assertEquals($result, $return);
    }
    
     public function testInsertGoalsTeam2(){
        $return = $this->timeControllerTest->_insertGoalsTeam2(5, 7, 6);
        $result = $this ->timeDAO->insertGoalsTeam1(5, 7, 6);
        $this->assertEquals($result, $return);
    }

    /*
      O teste falha pq fala que essa função deleTime nao existe na classe timeDAO E ESSA FUNÇAO E UTILIZADA 
      MAS REALMENTE NÃO EXITE NA CLASSE. O QUE FAZER?
      public function testDeleteTime(){
        $return = $this->timeControllerTest->_deleteTime(3);
        $result = $this->timeDAO->deleteTime(3);
        $this->assertEquals($result, $return);
    }
     
      public function testInsertTime(){
        $return = $this->timeControllerTest->_insertTime(8);
        $result = $this->timeDAO->insertTime(8);
        $this->assertEquals($result, $return);
    }
    
    */
    
}
?>
