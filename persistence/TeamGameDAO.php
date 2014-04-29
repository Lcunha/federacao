<?php

/*
    Name: TeamGameDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update,
    delete) for handling the associative type Team_Game, in the relevant table 
    (table associative) in mysql.
*/

include_once (__APP_PATH.'/model/Team.php');
include_once (__APP_PATH.'/model/Game.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class TeamGameDAO{
	private $connection;
	
	/*
            The method is responsibility by to instance the class and initialize 
            conection with database.
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsibility by to list all records in database table.
	*/
	public function listAllTeamGames(){
            $sql = "SELECT * FROM time_jogo";
            $result = $this->connection->dataBase->Execute($sql);
            while($record = $result->FetchNextObject()){
                $teamDataGame = new TeamGame();
                $teamDataGame->__constructOverload($record->TIME_ID_TIME, 
                                                    $record->TEMPO_ID_TEMPO);
                $returnTeamGame[] = $teamDataGame;
            }
            return $returnTeamGame;
	}

	/*
            The method is responsiblity by to insert data in database table.
	*/
	public function insertTeamGame(TeamGame $teamDataGame){
            $sql = "INSERT INTO jogo_time (jogo_id_jogo, time_id_time) 
                    VALUES ('{$teamDataGame->__getIdGame()}', 
                            '{$teamDataGame->__getIdTeam()}')";
            $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to update data in database table.
	*/
	public function updateTeamGame(TeamGame $teamDataGame){
            $sql = "UPDATE jogo_time 
                SET jogo_id_jogo = '{$teamDataGame->__getIdGame()}',
                    time_id_time = '{$teamDataGame->__getIdTeam()}' ";
            $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsiblity by to consult in database table through of type Team.
	*/
	public function consultByIdTeam(TeamGame $idTeam){
            $sql = "SELECT * FROM time_jogo WHERE time_id_time = '{$idTeam}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $teamDataGame = new TeamGame();
            $teamDataGame->__constructOverload($record->TIME_ID_TIME, 
                                                $record->TEMPO_ID_TEMPO);
            return $teamDataGame;
	}
	
	/*
            The method is responsiblity by to consult in database table through Time.
	*/
	public function consultByTime(TeamGame $idTimePlay){
            $sql = "SELECT * FROM time_jogo WHERE tempo_id_tempo = '{$idTimePlay}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $teamDataGame = new TeamGame();
            $teamDataGame->__constructOverload($record->TIME_ID_TIME, 
                                                $record->TEMPO_ID_TEMPO);
            return $teamDataGame;
	}

	/*
            The method is responsibility by to delete data in database table.
	*/
	public function deleteTeamGame(TeamGame $idGame){
            $sql = "DELETE FROM jogo_time WHERE jogo_id_jogo = '{$idGame}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}
}
