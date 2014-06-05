<?php

include_once("/../../model/Coach.php");
include_once("/../../persistence/CoachDAO.php");

class CoachDAOTest extends PHPUnit_Framework_TestCase{
    
    protected $coachDAOTest;
    protected $coachTest;
  
    protected function setUp() {
        $this->coachDAOTest = new CoachDAO();
        $this->coachTest = new CoachTest();
    }

    protected function tearDown(){
        unset($this->coachDAOTest);
        unset($this->coachTest);
    }

}


?>
