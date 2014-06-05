<?php

include_once("/../../model/Coach.php");
include_once("/../../persistence/CoachDAO.php");

class CoachDAOTest extends PHPUnit_Framework_TestCase{
    
    protected $coachDAOTest;
    protected $coachTest;
  
    protected function setUp() {
        $this->coachDAOTest = new CoachDAO();
        $this->coachTest = new Coach(23, 'Fernando', '234245', '32344');
    }

    protected function tearDown(){
        unset($this->coachDAOTest);
        unset($this->coachTest);
    }
    
     public function testInsertCoach(){
       $result = $this->coachDAOTest->insertCoach($this->coachTest);
       $this->assertTrue($result);
   
     }
     
     public function testDeleteCoach(){
       $result = $this->coachDAOTest->deleteCoach(23);
       $this->assertTrue($result);
   }
   
    public function testUpdateCoach(){
       $result = $this->coachDAOTest->updateCoach($this->coachTest);
       $this->assertTrue($result);
   }
   
}


?>
