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
            The method is responsability by to list all registers in database table.
	*/
	public function listAllGames(){
            $sql = "SELECT * FROM jogo";
            $result = $this->connection->dataBase->Execute($sql);
            while($register = $result->FetchNextObject()){
                    $gameData = new Game();
                    $gameData->__constructOverload($register->ID_JOGO, $register->ESPECTADORES,
                                                    $register->CIDADE, $register->LOCALIZACAO,
                                                    $register->DATA_JOGO, $register->HORA_JOGO,
                                                    $register->DURACAO, $register->TOTAL_7METROS);
                    $returnGame[] = $gameData;
            }
            return $returnGame;
	}
	
	/*
            The method is responsibility by to insert data in database table.
	*/
	public function insertGame(Game $gameData){
            $sql = "INSERT INTO jogo (espectadores, cidade, localizacao, duracao, data_jogo
                                      hora_jogo, total_7Metros) 
                    VALUES ('{$gameData->__getAudience()}','{$gameData->__getCity()}',
                            '{$gameData->__getLocation()}','{$gameData->__getDuration()}',
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
                    SET espectadores = '{$gameData->__getAudience()}',
                        cidade = '{$gameData->__getCity()}', 
                        localizacao = '{$gameData->__getLocation()}', 
                        data_jogo = '{$gameData->__getGameDate()}', 
                        duracao = '{$gameData->__getDuration()}' 
                    WHERE id_jogo = '{$gameData->__getIdGame()}' ";
            $this->connection->dataBase->Execute($sql);
            return $gameData;
	}
	
	/*
		The method is responsibility by to consult in database table of ID.
	*/
	public function consultByIdGame($idGame){
            $sql = "SELECT * FROM jogo WHERE id_jogo = '{$idGame}'";
            $result = $this->connection->dataBase->Execute($sql);
            $register = $result->FetchNextObject();
            $gameData = new Game();
            $gameData->__constructOverload($register->ID_JOGO, $register->ESPECTADORES,
                                            $register->CIDADE, $register->LOCALIZACAO,
                                            $register->DATA_JOGO, $register->DURACAO,
                                            $register->TOTAL_7METROS);
            return $gameData;
	}
	
	/*
		The method is responsibility by to consult in database table of game date.
	*/
	public function consultByGameDate($gameDate){
            $sql = "SELECT * FROM jogo WHERE data_jogo = '{$gameDate}'";
            $result = $this->connection->dataBase->Execute($sql);
            $register = $result->FetchNextObject();
            $gameData = new Game();
            $gameData->__constructOverload($register->ID_JOGO,$register->ESPECTADORES,
                                            $register->CIDADE,$register->LOCALIZACAO,
                                            $register->DATA_JOGO,$register->DURACAO,
                                            $register->TOTAL_7METROS);
            return $gameData;
	}

	/*
            The method is responsibility by to delete in database table.
	*/
	public function deleteGame($idGame){
            $sql = "DELETE FROM arbitro WHERE id_arbitro = '{$idGame}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}
}
