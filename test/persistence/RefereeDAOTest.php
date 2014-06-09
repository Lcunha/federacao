<?php

include_once("/../../model/Referee.php");
include_once("/../../persistence/RefereeDAO.php");
include_once("/../../persistence/Connection.php");

class RefereeDAOTest extends PHPUnit_Framework_TestCase {
    
    protected function setUp() {
        $this->refereeTest = new Referee(2, 'Joao Silva', '(11)1234-5678', '111.111.111-11');
        $this->refereeDaoTest = new RefereeDAO();
    }

    protected function tearDown() {
        unset($this->refereeDaoTest);
        unset($this->refereeTest);
        
    }

    public function testListAllReferees(){
        $return = $this->refereeDaoTest->listAllReferees();
        $this->assertNotNull($return);    
    }
        
    public function testInsertReferee() {
        $return = $this->refereeDaoTest->insertReferee($this->refereeTest);
        $this->assertTrue($return);
    }    
       
    public function testUpdateReferee(){
        $return = $this->refereeDaoTest->updateReferee($this->refereeTest);
        $this->assertTrue($return);
    }

    public function testConsultByIdReferee(){
        $return = $this->refereeDaoTest->consultByIdReferee(1);
        $this->assertFalse($return);
    }
	
    public function testConsultByRefereeName(){
        $return = $this->refereeDaoTest->consultByRefereeName('JoÃ£o de Barro');
        $this->assertFalse($return);     
	}
 
    public function testDeleteReferee(){
        $retorno = $this->refereeDaoTest->deleteReferee(15);
        $this->assertTrue($retorno);      
	}

    public function testAmountRefereesRecords(){
        $retorno = $this->refereeDaoTest->amoutRefereesRecords(23);
        $this->assertFalse($retorno);
	}
    
}
