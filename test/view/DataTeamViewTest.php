<?php

include_once ('../../../controller/DataTeamController.php');
include_once ('../../../view/DataTeamView.php');
include_once ('../../../model/DataTeam.php');

class DataTeamViewTest extends PHPUnit_Framework_TestCase{
	
	protected $dataTeamCOTest;
	protected $dataTeamViewTest;

	protected function setUp() {
		$this->dataTeamCOTest = new DataTeamController();
		$this->dataTeamViewTest = new DataTeamView();
	}

	protected function tearDown() {
		unset($this->dataTeamCOTest);
		unset($this->dataTeamViewTest);
	}

	protected function testGetDataTeamControllerTestNotNull() {
		$this->assertNotNull($this->dataTeamCOTest);
	}

	protected function testGetDataTeamViewTestNotNull() {
		$this->assertNotNull($this->dataTeamViewTest);
	}
	
	protected function testListAllData() {
		$return = $this->dataTeamViewTest->listAllData();
		$result = $this->dataTeamCOTest->_listAllData();
		$this->assertEquals($result, $return);
	}

	protected function testConsultByIdDataTeam() {
		$return = $this->dataTeamViewTest->consultByIdDataTeam(1);
		$result = $this->dataTeamCOTest->_consultByIdDataTeam(1);
		$this->assertEquals($result, $return);
	}

	protected function testInsertDataTeam() {
		$dataTeam = new DataTeam();
		$return = $this->dataTeamViewTest->insertDataTeam($dataTeam;);
		$result = $this->dataTeamCOTest->_insertDataTeam($dataTeam);
		$this->assertEquals($result, $return);
	}

	protected function testUpdateDataTeam() {
		$return = $this->dataTeamViewTest->updateDataTeam(1,2,2,2,2,2,2,2);
		$result = $this->dataTeamCOTest->_updateDataTeam(1,2,2,2,2,2,2,2);
		$this->assertEquals($result, $return);
	}

	protected function testDeleteDataTeam() {
		$return = $this->dataTeamViewTest->deleteDataTeam(1);
		$result = $this->dataTeamCOTest->_deleteDataTeam(1);
		$this->assertEquals($result, $return);	
	}
}

?>