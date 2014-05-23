<?php

/*
    Name: TimeDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Time, in the relevant table in mysql.
*/
include_once ('./model/Time.php');
include_once ('./model/Game.php');
include_once ('./persistence/Connection.php');

class TimeDAO{
	private $connection;
	
	/*
            The method is responsibility by to instance the class and initialize variable of conection with database.
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsibility by to list all registers in database table.
            The function has no input parameter, but the database stores the game data as 
            id time, type, timing and other technical Scoreboard data carcacterizam time.
	*/
	public function listAllTime(){
            $sql = "SELECT * FROM tempo";
            $result = $this->connection->dataBase->Execute($sql);
            while($record = $result->FetchNextObject()){
                $dataTime = new Time();
                $dataTime->__constructOverload($record->ID_TEMPO, $record->JOGO_ID_JOGO,
                                                 $record->TIPO, $record->TIRO_7METROS,
                                                 $record->TEMPO_TECNICO, $record->PLACAR_TIME1,
                                                 $record->PLACAR_TIME2);
                $returnTime[] = $dataTime;
            }
            return $returnTime;
        }
	
	/*
            The method is responsibility by to insert data in database table.
            The function has as parameter input an id of a game. And enter all the values 
            of game time in the database.
        */
	public function insertGame(Time $idGame){
            $sql = "INSERT INTO tempo (jogo_id_jogo, tiro_7metros, tempo_tecnico, placar_time1,
                                       placar_time2,tipo) 
                    VALUES ('{$idGame}',0,0,0,0,0)";
            $this->connection->dataBase->Execute($sql);
	}
	
	/*
            The method is responsibility by to update data in database table.
            Receives as input parameter data from a time of a game and all that data of this team 
            are updated in the database. The function updates all the data and returns the data from the updated time.
         */
	public function updateTime(Time $dataTime){
            $sql = "UPDATE tempo 
                    SET jogo_id_jogo='{$dataTime->__getIdPlayer()}',
                        tipo='{$dataTime->__getType()}', 
                        tiro_7metros='{$dataTime->__getAmountSevenMetersTotal()}',
                        tempo_tecnico='{$dataTime->__getTimeCoach()}', 
                        placar_time1='{$dataTime->__getScoreboardTeam1()}', 
                        placar_time2='{$dataTime->__getScoreboardTeam1()}'  
                    WHERE id_tempo='{$dataTime->__getIdTimePlay()}' ";
            $this->connection->dataBase->Execute($sql);
            return $dataTime;
	}
	
	/*
            The method is responsibility by to consult data in database through of ID.
            Receives as input parameter the id of game time and query the database all stored 
            data for that id. Performs the query and returns a variable DataTime that stores all data in the query.
        */
	public function consultByIdTime(Time $idTimePlay){
            $sql = "SELECT * FROM tempo WHERE id_tempo = '{$idTimePlay}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataTime = new Time();
            $dataTime->__constructOverload($record->ID_TEMPO, $record->JOGO_ID_JOGO,
                                             $record->TIPO, $record->TIRO_7METROS,
                                             $record->TEMPO_TECNICO, $record->PLACAR_TIME1,
                                             $record->PLACAR_TIME2);		
            return $dataTime;
	}
	
	/*
            The method is responsibility by to consult data in database through of amountReports.
            Performs the query time using a report of a game. Receives as input parameter a variable that 
            stores the amount of realtorios. The function stores the data from this query into a variable and returns DataTime these variable.
         */
	public function consultByReport(Team $amountReports){
            $sql = "SELECT * FROM tempo WHERE relatorio = '{$amountReports}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataTime = new Time();
            $dataTime->__constructOverload($record->ID_TEMPO, $record->JOGO_ID_JOGO,
                                             $record->TIPO, $record->TIRO_7METROS,
                                             $record->TEMPO_TECNICO, $record->PLACAR_TIME1,
                                             $record->PLACAR_TIME2);
            return $dataTime;
	}

	/*
            The method is responsibility by to delete in database table.
            Receives as input parameter a variable that stores the id of the player 
            that will be deleted from the database. Delete this id possessing no return.
         */
	public function deletePlayer(Time $idPlayer){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$idPlayer}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
           The method is responsibility by to insert point in atributter scoreboard of teamA and seven meters.
           Receives as input parameter of the first team to score, total seven feet, and the id of a team in a game of 
           numbers updating the goals achieved by the team in the database. It has no return.
         */
	public function insertGoalsTeam1($scoreboardTeam1, $amountSevenMetersTotal, $idTimePlay){
            $sql = "UPDATE tempo 
                    SET placar_time1 = '{$scoreboardTeam1}', tiro_7metros = '{$amountSevenMetersTotal}' 
                    WHERE id_tempo = '{$idTimePlay}'";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to insert pont in atributter scoreboard of teamB and seven meters.
            Receives as input parameter to score the second team, and the id of a team in a game of numbers updating 
            the goals achieved by the team in the database. It has no return.
         */
	public function insertGoalsTeam2($scoreboardTeam2, $idTimePlay){
            $sql = "UPDATE tempo 
                    SET placar_time2 = '{$scoreboardTeam2}'  
                    WHERE id_tempo = '{$idTimePlay}'";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to consult last register in database table.
            The function has no input parameter. E has no return.
	*/
	public function lastQueryRegistry(){
            $sql = "SELECT MAX(id_tempo) AS id FROM tempo";
            $result = $this->connection->dataBase->Execute($sql);
            return $result;
	}
}
