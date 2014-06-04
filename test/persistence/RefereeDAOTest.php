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
        $retorno = $this->refereeDaoTest->listAllReferees();
        $this->assertNotNull($retorno);    
    }
        
    public function testInsertReferee() {
        $retorno = $this->refereeDaoTest->insertReferee($this->refereeTest);
        $this->assertTrue($retorno);
    }    
    /*    
    public function updateReferee(Referee $dataReferee){
            
	}

    public function consultByIdReferee(Referee $idReferee){
            
	}
	
    public function consultByRefereeName(Referee $refereeName){
            
	}

    public function deleteReferee(Referee $idReferee){
            
	}

    public function amountRefereesRecords(){
        
	}
    */
}
