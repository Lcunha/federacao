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
	*/
	public function insertGame($idGame){
            $sql = "INSERT INTO tempo (jogo_id_jogo, tiro_7metros, tempo_tecnico, placar_time1,
                                       placar_time2,tipo) 
                    VALUES ('{$idGame}',0,0,0,0,0)";
            $this->connection->dataBase->Execute($sql);
	}
	
	/*
            The method is responsibility by to update data in database table.
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
	*/
	public function consultByIdTime($id){
            $sql = "SELECT * FROM tempo WHERE id_tempo = '{$id}'";
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
	*/
	public function consultByReport($amountReports){
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
	*/
	public function deletePlayer($id){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$id}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to insert point in atributter scoreboard of teamA and seven meters.
	*/
	public function insertGoalsTeam1( $scoreboardTeam1, $amountSevenMetersTotal, $idTime){
            $sql = "UPDATE tempo 
                    SET placar_time1 = '{$scoreboardTeam1}', tiro_7metros = '{$amountSevenMetersTotal}' 
                    WHERE id_tempo = '{$idTime}'";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to insert pont in atributter scoreboard of teamB and seven meters.
	*/
	public function insertGoalsTeam2($scoreboardTeam2, $idTime){
            $sql = "UPDATE tempo 
                    SET placar_time2 = '{$scoreboardTeam2}'  
                    WHERE id_tempo = '{$idTime}'";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsibility by to consult last register in database table.
	*/
	public function lastQueryRegistry(){
            $sql = "SELECT MAX(id_tempo) AS id FROM tempo";
            $result = $this->connection->dataBase->Execute($sql);
            return $result;
	}
}
