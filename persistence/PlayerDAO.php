<?php

/*
    Name: PlayerDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Player, in the relevant table in mysql.
 */

include_once (__APP_PATH.'/model/Player.php');
include_once (__APP_PATH.'/model/Team.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class PlayerDAO{
	private $connection;
	
	/*
            The method is responsibility to instance the class
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsibility by list all registers in database table.
	*/
	public function listAllPlayers(){
            $sql = "SELECT * FROM jogador";
            $result = $this->connection->banco->Execute($sql);
            while($record = $result->FetchNextObject()){
                    $playerData = new Player();
                    $playerData->__constructOverload($record->ID_JOGADOR,
                                                       $record->TIME_ID_TIME,$record->NOME,
                                                       $record->DATA_NASCIMENTO,
                                                       $record->CPF,$record->NUMERO);
                    $returnPlayerData[] = $playerData;
            }
            return $returnPlayerData;
	}
	
	/*
            The method is responsibility by to insert data in database table.
	*/
	public function insertPlayer($playerData){
            $sql = "INSERT INTO jogador (time_id_time, nome, data_nascimento, cpf, numero) 
                    VALUES ('{$playerData->__getPlayerName()}','{$playerData->__getIdTeam()}',
                            '{$playerData->__getBirthDatePlayer()}',
                            '{$playerData->__getCpf()}','{$playerData->__getPlayerNumber()}')";
            $this->connection->banco->Execute($sql);
	}
	
	/*
            The method is responsibility by to update data in database table.
	*/
	public function updatePlayer($playerData){
            $sql = "UPDATE jogador 
                    SET time_id_time = '{$playerData->__getIdTeam()}',
                        nome = '{$playerData->__getPlayerName()}', 
                        data_nascimento = '{$playerData->__getBirthDatePlayer()}', 
                        cpf = '{$playerData->__getCpf()}', 
                        numero = '{$playerData->__getPlayerNumber()}' 
                    WHERE id_jogador='{$playerData->__getIdPlayer()}' ";
            $this->connection->banco->Execute($sql);
            return $playerData;
	}
	
	/*
            The method is responsibility by to consult in database table through of ID.
	*/
	public function consultByIdPlayer($id){
            $sql = "SELECT * FROM jogador WHERE id_jogador = '{$id}'";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}
	
	/*
            The method is responsibility by to consult in database table through of Name.
	*/
	public function consultByPlayerName($playerName){
            $sql = "SELECT * FROM jogador WHERE nome = '{$playerName}'";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}

	/*
            The method is responsibility by to consult in database table through of data Team.
	*/
	public function consultPlayerByIdTeam($teamData){
            $sql = "SELECT * FROM jogador WHERE time_id_time = '{$teamData->__getIdTeam()}'";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}

	/*
            The mthod is responsibility by to delete data in databse table.
	*/
	public function deletePlayer($idPlayer){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$idPlayer}' ";
            $result = $this->connection->banco->Execute($sql);
	}

	/*
            The method is responsibility by count all registers of type Player.
	*/
	public function amountPlayersRecords(){
            $sql = "SELECT COUNT(*) as contagem FROM jogador";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            return $record->CONTAGEM;
	}

	/*
            The method is responsibility by to list gunners through of information data of type Player and Team.
	*/
	public function listGunners(){
            $sql = "SELECT j.nome AS nome,      
                           t.nome AS nome_time, 
                           j.numero AS numero , 
                           SUM(gol) AS gols
                    FROM dados d,jogador j,time t
                    WHERE j.id_jogador = d.jogador_id_jogador
                    AND j.time_id_time = t.id_time
                    GROUP BY jogador_id_jogador
                    ORDER BY gols DESC";
            $result = $this->connection->banco->Execute($sql);
            while($record = $result->FetchNextObject()){
                $gunner['playerName'] = $record->NOME;
                $gunner['teamName'] = $record->NOME_TIME;
                $gunner['amountGoals'] = $record->GOLS;
                $gunner['playerNumber'] = $record->NUMERO;
                $arrayGunner[] = $gunner;
            }	
            return $arrayGunner;
	}

	/*
            The method is responsibility by to list fear players through of information data of type Player and Team.
	*/
	public function listFearPlayers(){
                    $sql = "SELECT j.nome AS nome,
                           t.nome AS nome_time,
                           j.numero AS numero , 
                           (d.advertencia + d.punicao + d.desqualificacao + d.relatorio) 
                           AS faltas
                    FROM dados d,jogador j,time t
                    WHERE j.id_jogador = d.jogador_id_jogador
                    AND j.time_id_time = t.id_time
                    GROUP BY jogador_id_jogador	
                    ORDER BY faltas ASC";
            $result = $this->connection->banco->Execute($sql);
            while($record = $result->FetchNextObject()){
                $fear['playerName'] = $record->NOME;
                $fear['teamName'] = $record->NOME_TIME;
                $fear['amountPenalty'] = $record->FALTAS;
                $fear['playerNumber'] = $record->NUMERO;
                $arrayFear[] = $fear;
            }

            return $arrayFear;
        }
}
