<?php

/*
    Name: GameDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Game, in the relevant table in mysql.
*/

include_once (__APP_PATH.'/model/Game.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class GameDAO{
	private $connection;
	
	/*
            The method is responsability to instance the class.
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsability by to list all records in database table.
	*/
	public function listAllGames(){
            $sql = "SELECT * FROM jogo";
            $result = $this->connection->dataBase->Execute($sql);
            while($record = $result->FetchNextObject()){
                    $gameData = new Game();
                    $gameData->__constructOverload($record->ID_JOGO, $record->ESPECTADORES,
                                                    $record->CIDADE, $record->LOCALIZACAO,
                                                    $record->DATA_JOGO, $record->HORA_JOGO,
                                                    $record->DURACAO, $record->TOTAL_7METROS);
                    $returnGameData[] = $gameData;
            }
            return $returnGameData;
	}
	
	/*
            The method is responsibility by to insert data in database table.
	*/
	public function insertGame(Game $gameData){
            $sql = "INSERT INTO jogo (espectadores, cidade, localizacao, duracao, data_jogo
                                      hora_jogo, total_7Metros) 
                    VALUES ('{$gameData->__getGameAudience()}','{$gameData->__getGameCity()}',
                            '{$gameData->__getGameLocation()}','{$gameData->__getGameDuration()}',
                            '{$gameData->__getGameDate()}','{$gameData->__getGameTime()}',
                            '{$gameData->__getTotal7Meters()}')";
            $this->connection->dataBase->Execute($sql);
            //$idGame = $dataBase->insert_Id();
            //return $idGame;
	}
	
	/*
            The method is responsibility by to update data in database table.
	*/
	public function updateGame(Game $gameData){
            $sql = "UPDATE jogo 
                    SET espectadores = '{$gameData->__getGameAudience()}',
                        cidade = '{$gameData->__getGameCity()}', 
                        localizacao = '{$gameData->__getGameLocation()}', 
                        data_jogo = '{$gameData->__getGameDate()}', 
                        duracao = '{$gameData->__getGameDuration()}' 
                    WHERE id_jogo = '{$gameData->__getIdGame()}' ";
            $this->connection->dataBase->Execute($sql);
            return $gameData;
	}
	
	/*
		The method is responsibility by to consult in database table of ID.
	*/
	public function consultByIdGame(Game $idGame){
            $sql = "SELECT * FROM jogo WHERE id_jogo = '{$idGame}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $gameData = new Game();
            $gameData->__constructOverload($record->ID_JOGO, $record->ESPECTADORES,
                                            $record->CIDADE, $record->LOCALIZACAO,
                                            $record->DATA_JOGO, $record->DURACAO,
                                            $record->TOTAL_7METROS);
            return $gameData;
	}
	
	/*
		The method is responsibility by to consult in database table of game date.
	*/
	public function consultByGameDate(Game $gameDate){
            $sql = "SELECT * FROM jogo WHERE data_jogo = '{$gameDate}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $gameData = new Game();
            $gameData->__constructOverload($record->ID_JOGO,$record->ESPECTADORES,
                                            $record->CIDADE,$record->LOCALIZACAO,
                                            $record->DATA_JOGO,$record->DURACAO,
                                            $record->TOTAL_7METROS);
            return $gameData;
	}

	/*
            The method is responsibility by to delete in database table.
	*/
	public function deleteGame(Game $idReferee){
            $sql = "DELETE FROM arbitro WHERE id_arbitro = '{$idReferee}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}
}
