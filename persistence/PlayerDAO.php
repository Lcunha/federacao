<?php

/*
    Name: PlayerDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Player, in the relevant table in mysql.
 */

include_once ('/../model/Player.php');
include_once ('/../model/Team.php');
include_once ('/../persistence/Connection.php');

class PlayerDAO{
	private $connection;
	
	/*
            The method is responsibility to instance the class
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsible to list all records about the players in database table.
            This function doesn't have input parameters and returns a list with all the players 
            data that already are in the database table.
        */
	public function listAllPlayers(){
            $sql = "SELECT * FROM jogador";
            $result = $this->connection->dataBase->Execute($sql);
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
            The method is responsible to insert data in database table. This function have one
            variable of the class Player (that capture the information with the getters method of 
            the class to insert the information) as input parameter. It doesn't have any return.
        */
	public function insertPlayer(Player $playerData){
            $sql = "INSERT INTO jogador (time_id_time, nome, data_nascimento, cpf, numero) 
                    VALUES ('{$playerData->__getPlayerName()}','{$playerData->__getIdTeam()}',
                            '{$playerData->__getBirthDatePlayer()}',
                            '{$playerData->__getCpfPlayer()}','{$playerData->__getPlayerNumber()}')";
            $this->connection->dataBase->Execute($sql);
	}
	
	/* 
            The method is responsible to update data in database table. This function have one
            variable of the class Player (that capture the information with the getters method of 
            the class to update the information) as input parameter. It returns all the player data
            that are in the database table updated.
        */
	public function updatePlayer(Player $playerData){
            $sql = "UPDATE jogador 
                    SET time_id_time = '{$playerData->__getIdTeam()}',
                        nome = '{$playerData->__getPlayerName()}', 
                        data_nascimento = '{$playerData->__getBirthDatePlayer()}', 
                        cpf = '{$playerData->__getCpfPlayer()}', 
                        numero = '{$playerData->__getPlayerNumber()}' 
                    WHERE id_jogador='{$playerData->__getIdPlayer()}' ";
            $this->connection->dataBase->Execute($sql);
            return $playerData;
	}
	
	/*
            The method is responsible to consult by id the database table. This function have 
            the id of the class Player (to search the database table) as input parameter. It 
            returns all the player data that are in the database table searched.
        */
	public function consultByIdPlayer(Player $idPlayer){
            $sql = "SELECT * FROM jogador WHERE id_jogador = '{$idPlayer}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}
	
	/*
            The method is responsible to consult by id the database table. This function have 
            the idPlayer of the class Player (to search the database table) as input parameter. It 
            returns all the player data that are in the database table searched.
        */
	public function consultByPlayerName(Player $playerName){
            $sql = "SELECT * FROM jogador WHERE nome = '{$playerName}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}

	/*
            The method is responsible to consult by id the database table. This function have 
            the idTeam of the class Player (to search the database table) as input parameter. It 
            returns all the player data that are in the database table searched.
        */
	public function consultPlayerByIdTeam(Player $teamData){
            $sql = "SELECT * FROM jogador WHERE time_id_time = '{$teamData->__getIdTeam()}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $playerData = new Player();
            $playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                               $record->NOME, $record->DATA_NASCIMENTO,
                                               $record->CPF, $record->NUMERO);
            return $playerData;
	}

	/* 
            The method is responsible to delete in database table through of id. This function have 
            the id of the class Player as input parameter. It doesn't have return.
        */
	public function deletePlayer(Player $idPlayer){
            $sql = "DELETE FROM jogador WHERE id_jogador = '{$idPlayer}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsible to count all records of the players. This function doesn't
            have input parameter and returns the number of records.
	*/
	public function amountPlayersRecords(){
            $sql = "SELECT COUNT(*) as contagem FROM jogador";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            return $record->CONTAGEM;
	}

	/*
            The method is responsible to list all records about the gunners in database table.
            This function doesn't have input parameters and returns a list with all the gunners 
            data that already are in the database table.
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
            $result = $this->connection->dataBase->Execute($sql);
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
            The method is responsible to list all records about the fear players in database table.
            This function doesn't have input parameters and returns a list with all the fear 
            players data that already are in the database table.
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
            $result = $this->connection->dataBase->Execute($sql);
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
