<?php

/*
    Name: RefereeDAO.php  
    Description: Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Arbitrator, in the relevant table in mysql.
 */

//include_once (__APP_PATH.'/model/Referee.php');
//include_once (__APP_PATH.'/persistence/Connection.php');

include_once("/../model/Referee.php");
include_once("/../persistence/Connection.php");

class RefereeDAO{
	private $connection;
	
	/* 
            Construct Method of class RefereeDAO. 
	*/
	public function __construct(){
            $this->connection = new Connection();
	}

	/*
            The method is responsible to list all records about the referees in database table.
            This function doesn't have input parameters and returns a list with all the referees 
            data that already are in the database table.
        */
	public function listAllReferees(){
            $sql = "SELECT * FROM arbitro";
            $result = $this->connection->dataBase->Execute($sql);
            while($record = $result->FetchNextObject()){
                    $dataReferee = new Referee();
                    $dataReferee->__constructOverload($record->ID_ARBITRO, 
                                                       $record->NOME, 
                                                       $record->TELEFONE, 
                                                       $record->CPF);
                    $returnReferee[] = $dataReferee;
            }
            return $returnReferee;
	}

	/*
            The method is responsible to insert data in database table. This function have one
            variable of the class Referee (that capture the information with the getters method of 
            the class to insert the information) as input parameter. It doesn't have any return.
        */
	public function insertReferee(Referee $dataReferee){
            $sql = "INSERT INTO arbitro (nome, telefone, cpf)
                    VALUES ('{$dataReferee->__getRefereeName()}', 
                    '{$dataReferee->__getRefereePhone()}',
                    '{$dataReferee->__getRefereeCpf()}')";
            $this->connection->dataBase->Execute($sql);
            $dataReferee = mysql_query($sql);
            return $dataReferee;
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
            The method is responsible to update data in database table. This function have one
            variable of the class Referee (that capture the information with the getters method of 
            the class to update the information) as input parameter. It returns all the referee 
            data that are in the database table updated.
        */
	public function consultByIdReferee(Referee $idReferee){
            $sql = "SELECT * FROM arbitro WHERE id_arbitro = '{$idReferee}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataReferee = new Referee();
            $dataReferee->__constructOverload($record->ID_ARBITRO, $record->NOME, 
                                               $record->TELEFONE, $record->CPF);
            return $dataReferee;
	}
	
	/*
            The method is responsible to consult by referee name the database table. This 
            function have the referee name of the class Referee (to search the database table) 
            as input parameter. It returns all the referee data that are in the database table 
            searched.
        */
	public function consultByRefereeName(Referee $refereeName){
            $sql = "SELECT * FROM arbitro WHERE nome= '{$refereeName}'";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataDataTeam = new TeamData();
            $dataDataTeam->__constructOverload($record->ID_ARBITRO, $record->NOME, 
                                                 $record->CPF);
            return $dataDataTeam;
	}

	/* 
            The method is responsible to delete in database table through of id. This function have 
            the id of the class Referee as input parameter. It doesn't have return.
        */
	public function deleteReferee(Referee $idReferee){
            $sql = "DELETE FROM arbitro WHERE id_arbitro= '{$idReferee}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}

	/* 
            The method is responsible for count the records of the referees in database. This 
            function doesn't have input parameter and returns the number of records.
	*/
	public function amountRefereesRecords(){
            $sql = "SELECT COUNT(*) as contagem FROM arbitro";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            return $record->CONTAGEM;
	}
}

