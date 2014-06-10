<?php

include_once ('../../../controller/CoachController.php');

class CoachViewTest extends PHPUnit_Framework_TestCase{

	protected $coachCOTest;
	protected $coachViewTest;

	protected function setUp() {
		$this->coachCOTest = new CoachController();
		$this->coachViewTest = new CoachView();
	}

	protected function tearDown() {
		unset($this->coachCOTest);
		unset($this->coachViewTest);
	}

	protected function testGetCoachControllerTestNotNull() {
		$this->assertNotNull($this->coachCOTest);
	}

	protected function testGetCoachViewTestNotNull() {
		$this->assertNotNull($this->CoachViewTest);
	}

	protected function testUpdateCoach() {
		$return = $this->coachViewTest->updateCoach(1,"Lucas", "6191776658", "03908235111");
		$result = $this->coachCOTest->_updateCoach(1,"Lucas", "6191776658", "03908235111");
		$this->assertEquals($result, $return);
	}

	protected function testSaveCoach() {
		$return = $this->coachViewTest->saveCoach(1,"Lucas", "6191776658", "03908235111");
		$result = $this->coachCOTest->_saveCoach(1,"Lucas", "6191776658", "03908235111");
		$this->assertEqual($result, $return);
	}

	protected function testDeleteCoach() {
		$return = $this->coachViewTest->deleteCoach(10);
		$result = $this->coachCOTest->_deleteCoach(10);
		$this->assertEquals($result, $return);
	}

	protected function testlistAllCoachesForTable() {
		$return = $this->coachViewTest->listAllCoachesForTable();
		$result = $this->coachCOTest->_listAllCoachesForTable();;
		$this->assertEquals($result, $return);
	}

	protected function testConsultByIdCoach() {
		$return = $this->coachViewTest->consultByIdCoach(1);
		$result = $this->coachCOTest->_consultByIdCoach(1);
		$this->assertEquals($reuslt, $return);
	}
}

?>