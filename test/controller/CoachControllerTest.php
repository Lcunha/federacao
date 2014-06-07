<?php

include_once("../../controller/CoachController.php");
include_once("../../persistence/CoachDAO.php");
include_once("../../model/Coach.php");

class CoachControllerTest extends PHPUnit_Framework_TestCase{

     protected $coachControllerTest;
     protected $coachDAOTest;
     protected $coachTest;
    
    protected function setUp() {
        $this->coachControllerTest = new CoachController();
        $this->coachDAOTest = new CoachDAO();
        $this->coachTest = new Coach();
    }
    
    protected function tearDown() {   
        unset($this->coachControllerTest);
        unset($this->coachDAOTest);
    }
    
    public function testGetCoachaControllerTesNotNull() {
        $this->assertNotNull($this->coachControllerTest);
    }
    
    public function testGetCoachaDAOTesNotNull() {
        $this->assertNotNull($this->coachDAOTest);
    }
    
    public function testDeleteCoach(){
        $return = $this->coachControllerTest->_deleteCoach(1);
        $result = $this->coachDAOTest->deleteCoach(1);
        $this->assertEquals($result, $return);
    }
      public function testAmountCoachesRecords(){
        $return = $this->coachControllerTest->_amountCoachesRecords();
        $result = $this->coachDAOTest->amountCoachesRecords();
        $this->assertEquals($result, $return);
    }
    /*
        public function testConsultByCoachName(){
        $return = $this->coachControllerTest->_consultByCoachName('Fernando');
        $result = $this->coachDAOTest->consultByCoachName('Fernando');
        $this->assertEquals($result, $return);
    }

    } */
    
    
}

?>
