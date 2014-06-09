<?php

include_once("../../model/Team.php");

class TeamTest extends PHPUnit_Framework_TestCase{
    
    protected $teamTest;


    protected function setUp() {
        $this->teamTest = new Team();
    }
   
     protected function tearDown() {
        unset($this->teamTest);
    }
    
      public function testGetInstanceTeamTestNotNull() {
        $this->assertNotNull($this->teamTest);
    }
 
    public function testSetIdTeam(){
        $this->teamTest->__setIdTeam(1);
        $result = $this->teamTest->__getIdTeam();
        $this->assertEquals(1,$result);
    }
    
    public function testSetIdCoach(){
        $this->teamTest->__setIdCoach(2);
        $result = $this->teamTest->__getIdCoach();
        $this->assertEquals(2,$result);
    }
    
     public function testSetTeamName(){
        $this->teamTest->__setTeamName('Flamengo');
        $result = $this->teamTest->__getTeamName();
        $this->assertEquals('Flamengo',$result);
    }
    
     public function testSetTeamCategory(){
        $this->teamTest->__setTeamCategory('Juvenil');
        $result = $this->teamTest->__getTeamCategory();
        $this->assertEquals('Juvenil',$result);
    }
    
    public function testSetTeamAddress(){
        $this->teamTest->__setTeamAddress('Rua São Vicente casa 233');
        $result = $this->teamTest->__getTeamAddress();
        $this->assertEquals('Rua São Vicente casa 233',$result);
    }
    
    public function testSetTeamFoundationDate(){
        $this->teamTest->__setTeamFoundationDate('23/09/1998');
        $result = $this->teamTest->__getTeamFoundationDate();
        $this->assertEquals('23/09/1888',$result);
    }
    
    public function testSetTeamPresident(){
        $this->teamTest->__setTeamPresident('Jonas');
        $result = $this->teamTest->__getTeamPresident();
        $this->assertEquals('Jonas',$result);
    }

    public function testSetTeamPhone(){
        $this->teamTest->__setTeamPhone('9999-9999');
        $result = $this->teamTest->__getTeamPhone();
        $this->assertEquals('9999-9999',$result);
    }
    
    public function testSetTeamPoints(){
        $this->teamTest->__setTeamPoints('25');
        $result = $this->teamTest->__getTeamPoints();
        $this->assertEquals('25',$result);
    }
}
?>