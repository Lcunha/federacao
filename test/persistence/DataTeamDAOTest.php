<?php

include_once("../../../federac/persistence/DataTeamDAO.php");

class DataTeamDAOTest extends PHPUnit_Framework_TestCase{
  
     protected $dataTeamDAOTest;
    
    protected function setUp() {
        $this->dataTeamDAOTest = new DataTeamDAO();
    }
    
    protected function tearDown() {
        unset($this->dataTeamDAOTest);    
    }

    public function testDeleteDataTeam(){
        $result = $this->dataTeamDAOTest->deleteDataTeam(3);
                //livroDaoTeste->salvaLivro($this->livroTeste, 23);
        $this->assertTrue($result);
        
        
    }
    
}

?>
