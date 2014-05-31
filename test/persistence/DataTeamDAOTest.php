<?php

include_once("../../../federac/controller/DataTeamDAO.php");

class DataTeamDAOTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamDAOTest;
    
    protected function setUp() {
        $this->dataTeamDAOTest = new DataTeamDAO();
    }
    
    protected function tearDown() {
        unset($this->dataTeamDAOTest);    
    }


}

?>
