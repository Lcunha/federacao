<?php

/*
	Name: TempoDAO.php  
	Description:Class data persistence with CRUD functions (create, read, update, delete) 
	for handling the type Time, in the relevant table in mysql.
*/
include_once ('./model/Time.php');
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
	public function listarTodos(){
            $sql = "SELECT * FROM tempo";
            $result = $this->connection->banco->Execute($sql);
            while($registro = $result->FetchNextObject()){
                $dadosTempo = new Tempo();
                $dadosTempo->__constructOverload($registro->ID_TEMPO, $registro->JOGO_ID_JOGO,
                                                 $registro->TIPO, $registro->TIRO_7METROS,
                                                 $registro->TEMPO_TECNICO, $registro->PLACAR_TIME1,
                                                 $registro->PLACAR_TIME2);
                $retornaTempo[] = $dadosTempo;
            }
            return $retornaTempo;
    }
	
	/*
            The method is responsibility by to insert data in database table.
	*/
	public function inserirTempo($idJogo){
            $sql = "INSERT INTO tempo (jogo_id_jogo, tiro_7metros, tempo_tecnico, placar_time1,
                                       placar_time2,tipo) 
                    VALUES ('{$idJogo}',0,0,0,0,0)";
            $this->connection->banco->Execute($sql);
	}
	
	/*
            The method is responsibility by to update data in database table.
	*/
	public function atualizar(Tempo $dadosTempo){
            $sql = "UPDATE tempo 
                    SET jogo_id_jogo='{$dadosTempo->__getIdJogo()}',
                        tipo='{$dadosTempo->__getTipo()}', 
                        tiro_7metros='{$dadosTempo->__getTiro7Metros()}',
                        tempo_tecnico='{$dadosTempo->__getTempoTecnico()}', 
                        placar_time1='{$dadosTempo->__getplacarTime1()}', 
                        placar_time2='{$dadosTempo->__getPlacarTime2()}'  
                    WHERE id_tempo='{$dadosTempo->__getIdTempo()}' ";
            $this->connection->banco->Execute($sql);
            return $dadosTempo;
	}
	
	/*
            The method is responsibility by to consult data in database through of ID.
	*/
	public function consultarPorId($id){
            $sql = "SELECT * FROM tempo WHERE id_tempo = '{$id}'";
            $result = $this->connection->banco->Execute($sql);
            $registro = $result->FetchNextObject();
            $dadosTempo = new Tempo();
            $dadosTempo->__constructOverload($registro->ID_TEMPO, $registro->JOGO_ID_JOGO,
                                             $registro->TIPO, $registro->TIRO_7METROS,
                                             $registro->TEMPO_TECNICO, $registro->PLACAR_TIME1,
                                             $registro->PLACAR_TIME2);		
            return $dadosTempo;
	}
	
	/*
            The method is responsibility by to consult data in database through of report.
	*/
	public function consultarPorRelatorio($relatorio){
            $sql = "SELECT * FROM tempo WHERE relatorio = '{$relatorio}'";
            $result = $this->connection->banco->Execute($sql);
            $registro = $result->FetchNextObject();
            $dadosTempo = new Tempo();
            $dadosTempo->__constructOverload($registro->ID_TEMPO, $registro->JOGO_ID_JOGO,
                                             $registro->TIPO, $registro->TIRO_7METROS,
                                             $registro->TEMPO_TECNICO, $registro->PLACAR_TIME1,
                                             $registro->PLACAR_TIME2);
            return $dadosTempo;
	}

	/*
            The method is responsibility by to delete in database table.
	*/
	public function excluir($id){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to insert point in atributter scoreboard of teamA and seven meters.
	*/
	public function inserirGolTimeA( $placarA, $seteMetros, $idTempo){
            $sql = "UPDATE tempo 
                    SET placar_time1 = '{$placarA}', tiro_7metros = '{$seteMetros}' 
                    WHERE id_tempo = '{$idTempo}'";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to insert pont in atributter scoreboard of teamB and seven meters.
	*/
	public function inserirGolTimeB($placarB, $idTempo){
            $sql = "UPDATE tempo 
                    SET placar_time2 = '{$placarB}'  
                    WHERE id_tempo = '{$idTempo}'";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by to consult last register in database table.
	*/
	public function consultarUltimoRegistro(){
            $sql = "SELECT MAX(id_tempo) AS id FROM tempo";
            $result = $this->connection->banco->Execute($sql);
            return $result;
	}
}
