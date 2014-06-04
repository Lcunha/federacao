<?php

/*
    Name: GameDataDAO.php  
    Description: Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Data, in the relevant table in mysql.
*/
include_once ('/../model/GameData.php');
include_once ('/../persistence/Connection.php');

class GameDataDAO{
    private $connection;

    /* 
        Construct method of the class GameDataDAO. 
    */
    public function __construct(){
        $this->connection = new Connection();
    }
	
    /*
        The method is responsible to list all records about the game in database table.
        This function doesn't have input parameters and returns a list with all the game 
        data that already are in the database table.
    */
    public function listAllGameData(){
        $sql = "SELECT * FROM dados";
        $result = $this->connection->dataBase->Execute($sql);
        while($record = $result->FetchNextObject()){
            $generalGameData = new GameData();
            $generalGameData->__constructOverload($record->ID_DADOS, 
                                                  $record->JOGADOR_ID_JOGADOR,
                                                  $record->TEMPO_ID_TEMPO, 
                                                  $record->ADVERTENCIA, 
                                                  $record->PUNICAO,
                                                  $record->DESQUALIFICACAO,
                                                  $record->RELATORIO, $record->GOL);
            $returnGameData[] = $generalGameData;
        }
        return $returnGameData;
    }

    /*
        The method is responsible to insert data in database table. This function have one
        variable of the class GameData (that capture the information with the getters method of 
        the class to insert the information) as input parameter. It doesn't have any return.
    */
    public function insertGameData(GameData $generalGameData){
        $sql = "INSERT INTO dados (jogador_id_jogador, tempo_id_tempo, advertencia,
                                   punicao, desqualificacao, relatorio, gol)
                VALUES ('{$generalGameData->__getIdPlayer()}', 
                        '{$generalGameData->__getIdTimePlay()}',
                        '{$generalGameData->__getAmountWarning()}', 
                        '{$generalGameData->__getAmountPunishment()}',
                        '{$generalGameData->__getAmountDisqualification()}',
                        '{$generalGameData->__getAmountReports()}',
                        '{$generalGameData->__getGameGoals()}')";
        $this->connection->dataBase->Execute($sql);
    }

    /* 
        The method is responsible to update data in database table. This function have one
        variable of the class GameData (that capture the information with the getters method of 
        the class to update the information) as input parameter. It doens't have return. 
    */
    public function updateData(GameData $generalGameData){
        $sql = "UPDATE dados 
                SET jogador_id_jogador = '{$generalGameData->__getIdPlayer()}', 
                    tempo_id_tempo = '{$generalGameData->__getIdTimePlay()}', 
                    advertencia ='{$generalGameData->__getAmountWarning()}', 
                    punicao = '{$generalGameData->__getAmountPunishment()}', 
                    desqualificacao = '{$generalGameData->__getAmountDisqualification()}', 
                    relatorio = '{$generalGameData->__getAmountReports()}', 
                    gol = '{$generalGameData->__getGameGoals()}' 
                WHERE id_dados = '{$generalGameData->__getIdGameData()}' ";
        $this->connection->dataBase->Execute($sql);
    }

    /* 
        The method is responsible to update data in database table. This function have one
        variable of the class GameData (that capture the information with the getters method of 
        the class to update the information) as input parameter. It doens't have return. 
    */
    public function updateGameData(GameData $generalGameData){
        $sql = "UPDATE dados 
                SET advertencia = '{$generalGameData->__getAmountWarning()}', 
                    punicao = '{$generalGameData->__getAmountPunishment()}', 
                    desqualificacao = '{$generalGameData->__getAmountDisqualification()}', 
                    relatorio = '{$generalGameData->__getAmountReports()}', 
                    gol = '{$generalGameData->__getGameGoals()}'
                WHERE jogador_id_jogador = '{$generalGameData->__getIdPlayer()}'
                AND tempo_id_tempo='{$generalGameData->__getIdTimePlay()}'";
        $this->connection->dataBase->Execute($sql);
    }

    /*
        The method is responsible to consult by id the database table. This function have 
        the id of the class GameData (to search the database table) as input parameter. It 
        returns all the game data that are in the database table searched.
    */
    public function consultByIdGameData(GameData $idGameData){
        $sql = "SELECT * FROM dados WHERE id_dados = '{$idGameData}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $generalGameData = new GameData();
        $generalGameData->__constructOverload($record->ID_DADOS, 
                                              $record->JOGADOR_ID_JOGADOR,
                                              $record->TEMPO_ID_TEMPO, 
                                              $record->ADVERTENCIA, 
                                              $record->PUNICAO,
                                              $record->DESQUALIFICACAO,
                                              $record->RELATORIO, 
                                              $record->GOL);
        return $generalGameData;
    }

    /*
        The method is responsible to consult by id the database player table. This function have 
        the idPlayer of the class GameData (to search the database table) as input parameter. It 
        returns all the game data that are in the database table searched.
    */
    public function consultByIdPlayer(GameData $idPlayer){
        $sql = "SELECT * FROM dados WHERE jogador_id_jogador = '{$idPlayer}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $generalGameData = new GameData();
        $generalGameData->__constructOverload($record->ID_DADOS,
                                              $record->JOGADOR_ID_JOGADOR,
                                              $record->TEMPO_ID_TEMPO,
                                              $record->ADVERTENCIA, $record->PUNICAO,
                                              $record->DESQUALIFICACAO, $record->RELATORIO,
                                              $record->GOL);
        return $generalGameData;
    }

    /*
        The method is responsible to consult by id the database time table. This function have 
        the idTimePlay of the class GameData (to search the database table) as input parameter. It 
        returns all the game data that are in the database table searched.
    */
    public function consultByIdTimePlay(GameData $idTimePlay){
        $sql = "SELECT * FROM dados WHERE tempo_id_tempo = '{$idTimePlay}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $generalGameData = new GameData();
        $generalGameData->__constructOverload($record->ID_DADOS,
                                              $record->JOGADOR_ID_JOGADOR,
                                              $record->TEMPO_ID_TEMPO,
                                              $record->ADVERTENCIA, $record->PUNICAO,
                                              $record->DESQUALIFICACAO, $record->RELATORIO,
                                              $record->GOL);
        return $generalGameData;
    }

    /*
        The method is responsible to consult by amount reports the database table. This 
        function have the idPlayer of the class GameData (to search the database table) as 
        input parameter. It returns all the game data that are in the database table searched.
    */
    public function consultByAmountReports(GameData $amountReports){
        $sql = "SELECT * FROM dados WHERE relatorio = '{$amountReports}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $generalGameData = new GameData();
        $generalGameData->__constructOverload($record->ID_DADOS,
                                              $record->JOGADOR_ID_JOGADOR,
                                              $record->TEMPO_ID_TEMPO,
                                              $record->ADVERTENCIA,
                                              $record->PUNICAO,
                                              $record->DESQUALIFICACAO,
                                              $record->RELATORIO, $record->GOL);
        return $generalGameData;
    }

    /* 
        The method is responsible to delete in database table through of id. This function have 
        the id of the class GameData as input parameter. It doesn't have return.
    */
    public function deleteGameData( $idGameData){
        $sql = "DELETE FROM dados WHERE id_dados= '{$idGameData}' ";
        $result = $this->connection->dataBase->Execute($sql);
    }
}