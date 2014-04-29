<?php

/*
    Name: TempoDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Time, in the relevant table in mysql.
*/
include_once ('./model/Team.php');
include_once ('./model/Jogo.php');
include_once ('./persistence/Conexao.php');

class TimeDAO{
	private $connection;
	
	/*
            The method is responsibility by to instance the class and initialize variable of conection with database.
	*/
	public function __construct(){
            $this->connection = new Conexao();
	}
	
	/*
            The method is responsibility by to list all registers in database table.
	*/
	public function listAllTime(){
            $sql = "SELECT * FROM tempo";
            $result = $this->connection->banco->Execute($sql);
            while($record = $result->FetchNextObject()){
                $dataTime = new Tempo();
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
	public function insertTime($idJogo){
            $sql = "INSERT INTO tempo (jogo_id_jogo, tiro_7metros, tempo_tecnico, placar_time1,
                                       placar_time2,tipo) 
                    VALUES ('{$idJogo}',0,0,0,0,0)";
            $this->connection->banco->Execute($sql);
	}
	
	/*
            The method is responsibility by to update data in database table.
	*/
	public function updateTime(Tempo $dataTime){
            $sql = "UPDATE tempo 
                    SET jogo_id_jogo='{$dataTime->__getIdJogo()}',
                        tipo='{$dataTime->__getTipo()}', 
                        tiro_7metros='{$dataTime->__getTiro7Metros()}',
                        tempo_tecnico='{$dataTime->__getTempoTecnico()}', 
                        placar_time1='{$dataTime->__getplacarTime1()}', 
                        placar_time2='{$dataTime->__getPlacarTime2()}'  
                    WHERE id_tempo='{$dataTime->__getIdTempo()}' ";
            $this->connection->banco->Execute($sql);
            return $dataTime;
	}
	
	/*
            The method is responsibility by to consult data in database through of ID.
	*/
	public function consultByIdTime($id){
            $sql = "SELECT * FROM tempo WHERE id_tempo = '{$id}'";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $dataTime = new Tempo();
            $dataTime->__constructOverload($record->ID_TEMPO, $record->JOGO_ID_JOGO,
                                             $record->TIPO, $record->TIRO_7METROS,
                                             $record->TEMPO_TECNICO, $record->PLACAR_TIME1,
                                             $record->PLACAR_TIME2);		
            return $dataTime;
	}
	
	/*
            The method is responsibility by to consult data in database through of report.
	*/
	public function consultByReport($report){
            $sql = "SELECT * FROM tempo WHERE relatorio = '{$report}'";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $dataTime = new Tempo();
            $dataTime->__constructOverload($record->ID_TEMPO, $record->JOGO_ID_JOGO,
                                             $record->TIPO, $record->TIRO_7METROS,
                                             $record->TEMPO_TECNICO, $record->PLACAR_TIME1,
                                             $record->PLACAR_TIME2);
            return $dataTime;
	}

	/*
            The method is responsibility by to delete in database table.
	*/
	public function deleteTime($id){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to insert point in atributter scoreboard of teamA and seven meters.
	*/
	public function insertGoalsTeam1( $placarA, $seteMetros, $idTempo){
            $sql = "UPDATE tempo 
                    SET placar_time1 = '{$placarA}', tiro_7metros = '{$seteMetros}' 
                    WHERE id_tempo = '{$idTempo}'";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to insert pont in atributter scoreboard of teamB and seven meters.
	*/
	public function insertGoalsTeam2($placarB, $idTempo){
            $sql = "UPDATE tempo 
                    SET placar_time2 = '{$placarB}'  
                    WHERE id_tempo = '{$idTempo}'";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to consult last register in database table.
	*/
	public function lastQueryRegistry(){
            $sql = "SELECT MAX(id_tempo) AS id FROM tempo";
            $result = $this->connection->banco->Execute($sql);
            return $result;
	}
}
