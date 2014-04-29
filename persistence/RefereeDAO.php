<?php

/*
    Name: RefereeDAO.php  
    Description: Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Arbitrator, in the relevant table in mysql.
 */

include_once (__APP_PATH.'/model/Referee.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class RefereeDAO{
	private $connection;
	
	/* 
            Construct Method of class ArbitratorDAO 
	*/
	public function __construct(){
            $this->connection = new Connection();
	}

	/* 
            That method consultation for listing all arbitrators of table in mysql. 
	*/
	public function listAllReferees(){
            $sql = "SELECT * FROM arbitro";
            $result = $this->connection->dataBase->Execute($sql);
            while($register = $result->FetchNextObject()){
                    $dataReferee = new Referee();
                    $dataReferee->__constructOverload($register->ID_ARBITRO, 
                                                       $register->NOME, 
                                                       $register->TELEFONE, 
                                                       $register->CPF);
                    $returnReferee[] = $dataReferee;
            }
            return $returnReferee;
	}

	/* 
            Method that is responsible for insertion into table arbitrator in database mysql. 
	*/
	public function insertReferee(Referee $dataReferee){
            $sql = "INSERT INTO arbitro (nome, telefone, cpf)
                    VALUES ('{$dataReferee->__getRefereeName()}', 
                    '{$dataReferee->__getRefereePhone()}',
                    '{$dataReferee->__getRefereeCpf()}')";
            $this->connection->dataBase->Execute($sql);
	}

	/* 
	   Method that responsible for update into table arbitrator to database. 
	*/
	public function updateReferee(Referee $dataReferee){
            $sql = "UPDATE arbitro SET nome ='{$dataReferee->__getRefereeName()}',
                           telefone ='{$dataReferee->__getRefereePhone()}', 
                           cpf ='{$dataReferee->__getRefereeCpf()}'
                    WHERE id_arbitro ='{$dataReferee->__getIdReferee()}' ";
            $this->connection->dataBase->Execute($sql);
	}

	/* 
            Method is responsible for consult in table arbitrator in database mysql through of ID. 
	*/
	public function consultByIdReferee($idReferee){
            $sql = "SELECT * FROM arbitro WHERE id_arbitro = '{$idReferee}'";
            $result = $this->connection->dataBase->Execute($sql);
            $register = $result->FetchNextObject();
            $dataReferee = new Referee();
            $dataReferee->__constructOverload($register->ID_ARBITRO, $register->NOME, 
                                               $register->TELEFONE, $register->CPF);
            return $dataReferee;
	}
	
	/* 
            Method is responsible for consult in table arbitrator in database mysql through of NAME. 
	*/
	public function consultByRefereeName($refereeName){
            $sql = "SELECT * FROM arbitro WHERE nome= '{$refereeName}'";
            $result = $this->connection->dataBase->Execute($sql);
            $register = $result->FetchNextObject();
            $dataDataTeam = new TeamData();
            $dataDataTeam->__constructOverload($register->ID_ARBITRO, $register->NOME, 
                                                 $register->CPF);
            return $dataDataTeam;
	}

	/* 
            Method is responsible for exclude in table arbitrator in database mysql through of ID. 
	*/
	public function deleteReferee($idReferee){
            $sql = "DELETE FROM arbitro WHERE id_arbitro= '{$idReferee}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/* 
            Method is responsible for count of registered in table arbitrator in database. 
	*/
	public function amountRefereesRecords(){
            $sql = "SELECT COUNT(*) as contagem FROM arbitro";
            $result = $this->connection->dataBase->Execute($sql);
            $register = $result->FetchNextObject();
            return $register->CONTAGEM;
	}
}

