<?php

/*
    Name: GameDataDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Data, in the relevant table in mysql.
*/
include_once ('./model/GameData.php');
include_once ('./persistence/Connection.php');

class GameDataDAO{
    private $connection;

    /* 
        Construct method of class DataDAO 
    */
    public function __construct(){
        $this->connection = new Connection();
    }
	
    /* 
        Method is responsible for listing all datas in table database mysql. 
    */
    public function listAllData(){
        $sql = "SELECT * FROM dados";
        $result = $this->connection->database->Execute($sql);
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
        Method is responsible insertion of data in database table. 
    */
    public function insertData(GameData $generalGameData){
        $sql = "INSERT INTO dados (jogador_id_jogador, tempo_id_tempo, advertencia,
                                   punicao, desqualificacao, relatorio, gol)
                VALUES ('{$generalGameData->__getIdPlayer()}', 
                        '{$generalGameData->__getIdTimePlay()}',
                        '{$generalGameData->__getAmountWarnings()}', 
                        '{$generalGameData->__getAmountPunishment()}',
                        '{$generalGameData->__getAmountDisqualification()}',
                        '{$generalGameData->__getAmountReports()}',
                        '{$generalGameData->__getGameGoals()}')";
        $this->connection->database->Execute($sql);
    }

    /* 
        Method is reponsible update of data in database table. 
    */
    public function updateData(GameData $generalGameData){
        $sql = "UPDATE dados 
                SET jogador_id_jogador = '{$generalGameData->__getIdPlayer()}', 
                    tempo_id_tempo = '{$generalGameData->__getIdTimePlay()}', 
                    advertencia ='{$generalGameData->__getAmountWarnings()}', 
                    punicao = '{$generalGameData->__getAmountPunishment()}', 
                    desqualificacao = '{$generalGameData->__getAmountDisqualification()}', 
                    relatorio = '{$generalGameData->__getAmountReports()}', 
                    gol = '{$generalGameData->__getGameGoals()}' 
                WHERE id_dados = '{$generalGameData->__getIdGameData()}' ";
        $this->connection->database->Execute($sql);
    }

    /* 
        The method responsibility update of data in database table. 
    */
    public function updateGameData(GameData $generalGameData){
        $sql = "UPDATE dados 
                SET advertencia = '{$generalGameData->__getAmountWarnings()}', 
                    punicao = '{$generalGameData->__getAmountPunishment()}', 
                    desqualificacao = '{$generalGameData->__getAmountDisqualification()}', 
                    relatorio = '{$generalGameData->__getAmountReports()}', 
                    gol = '{$generalGameData->__getGameGoals()}'
                WHERE jogador_id_jogador = '{$generalGameData->__getIdPlayer()}'
                AND tempo_id_tempo='{$generalGameData->__getIdTimePlay()}'";
        $this->connection->database->Execute($sql);
    }

    /* 
        The method responsibility is consult in database table through of ID. 
    */
    public function consultByIdGameData($id){
        $sql = "SELECT * FROM dados WHERE id_dados = '{$id}'";
        $result = $this->connection->database->Execute($sql);
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
        The method reponsibility is consult in database table through the ID of type Player. 
    */
    public function consultByIdPlayer($idPlayer){
        $sql = "SELECT * FROM dados WHERE jogador_id_jogador = '{$idPlayer}'";
        $result = $this->connection->database->Execute($sql);
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
        The method responsibility is consult in database table through the ID of type Time. 
    */
    public function consultByIdTimePlay($idTimePlay){
        $sql = "SELECT * FROM dados WHERE tempo_id_tempo = '{$idTimePlay}'";
        $result = $this->connection->database->Execute($sql);
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
        The method responsibility is consult in database table by report. 
    */
    public function consultByAmountReports($amountReports){
        $sql = "SELECT * FROM dados WHERE relatorio = '{$amountReports}'";
        $result = $this->connection->database->Execute($sql);
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
        The method responsibility is delete in database table through of ID. 
    */
    public function deleteData($id){
        $sql = "DELETE FROM dados WHERE id_dados= '{$id}' ";
        $result = $this->connection->database->Execute($sql);
    }
}