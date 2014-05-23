<?php

/*
    Name: GameDAO.php  
    Description: Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Game, in the relevant table in mysql.
*/

include_once (__APP_PATH.'/model/Game.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class GameDAO{
	private $connection;
	
	/*
            The method is responsable to instance the class.
	*/
	public function __construct(){
            $this->connection = new Connection();
	}
	
	/*
            The method is responsable to list all records about the game in database table.
            This function doesn't have input parameters and returns a list with all the game 
            data that already are in the database table.
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
            The method is responsable to insert data in database table. This function have one
            variable of the class Game (that capture the information with the getters method of 
            the class to insert the information) as input parameter. It doesn't have any return.
	*/
	public function insertGame(Game $gameData){
            $sql = "INSERT INTO jogo (espectadores, cidade, localizacao, duracao, data_jogo
                                      hora_jogo, total_7Metros) 
                    VALUES ('{$gameData->__getGameAudience()}','{$gameData->__getGameCity()}',
                            '{$gameData->__getGameLocation()}','{$gameData->__getGameDuration()}',
                            '{$gameData->__getGameDate()}','{$gameData->__getGameTime()}',
                            '{$gameData->__getTotal7Meters()}')";
            $this->connection->dataBase->Execute($sql);
            }
	
	/*
            The method is responsable to update data in database table. This function have one
            variable of the class Game (that capture the information with the getters method of 
            the class to update the information) as input parameter. It returns all the game data
            that are in the database table updated.
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
            The method is responsable to consult by id the database table. This function have the
            id of the class Game (to search the database table) as input parameter. It returns all 
            the game data that are in the database table searched.
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
            The method is responsable to consult by the date that happened or will happen the
            game the database table. This function have the variable that represents the date that 
            happened or will happen the game of the class Game (to search the database table) as 
            input parameter. It returns all the game data that are in the database table searched.
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
            The method is responsable to delete in the database table. This function have the 
            id of the referee (the referee delete the information about the game when it's 
            finished) as input parameter. It doesn't have return.
	*/
	public function deleteGame(Game $idReferee){
            $sql = "DELETE FROM arbitro WHERE id_arbitro = '{$idReferee}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}
}
