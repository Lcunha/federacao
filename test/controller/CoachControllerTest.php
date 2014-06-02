<?php

include_once("../../../federac/controller/CoachController.php");
include_once("../../../federac/persistence/CoachDAO.php");

class CoachControllerTest extends PHPUnit_Framework_TestCase{

     protected $coachControllerTest;
     protected $coachDAOTest;
    
    protected function setUp() {
        $this->coachControllerTest = new CoachController();
        $this->coachDAOTest = new CoachDAO();
    }
    
    protected function tearDown() {   
        unset($this->coachControllerTest);
        unset($this->coachDAOTest);
    }
    
    public function testDeleteCoach(){
        $return = $this->coachControllerTest->_deleteCoach(1);
        $result = $this->coachDAOTest->deleteCoach(1);
        $this->assertEquals($result, $return);
    }
    

}

?>
