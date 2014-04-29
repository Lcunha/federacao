<?php

/*
    Name: CoachDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Coach, in the relevant table in mysql.
*/

include_once (__APP_PATH.'/model/Coach.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class CoachDAO{
    private $connection;
	
    /*
        The method is responsibility to instance the class.
    */
    public function __construct(){
        $this->connection = new Connection();
    }
	
    /*
        The method is responsibility to list all registers in dataBase table.
    */
    public function listAllCoaches(){
        $sql = "SELECT * FROM tecnico";
        $result = $this->connection->dataBase->Execute($sql);
        while($record = $result->FetchNextObject()){
            $coachData = new Coach();
            $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                             $record->TELEFONE, $record->CPF);
            $returnCoach[] = $coachData;
        }
        return $returnCoach;
    }
	
    /*
        The method is responsibility to insert data in dataBase table.
    */
    public function insertCoach(Coach $coachData){
        $sql = "INSERT INTO tecnico (nome , telefone, cpf) 
                VALUES ('{$coachData->__getCoachName()}', '{$coachData->__getCoachPhone()}',
                        '{$coachData->__getCoachCpf()}')";
        $this->connection->dataBase->Execute($sql);
    }
	
    /*
        The method is responsibility to update data in dataBase table.
    */
    public function updateCoach(Coach $coachData){
        $sql = "UPDATE tecnico 
                SET nome = '{$coachData->__getCoachName()}', 
                    telefone = '{$coachData->__getCoachPhone()}', 
                    cpf = '{$coachData->__getCoachCpf()}' 
                WHERE id_tecnico = '{$coachData->__getIdCoach()}' ";
        $this->connection->dataBase->Execute($sql);
        return $coachData;
    }
	
    /*
        The method is responsibility to consult in dataBase table through of ID.
    */
    public function consultByIdCoach($id){
        $sql = "SELECT * FROM tecnico WHERE id_tecnico = '{$id}' ";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $coachData = new Coach();
        $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                        $record->TELEFONE, $record->CPF);
        return $coachData;
    }
	
    /*
        The method is responsibility to consult in dataBase table through of Name.
    */
    public function consultByCoachName($coachName){
        $sql = "SELECT * FROM tecnico WHERE nome = '{$coachName}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $coachData = new Coach();
        $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                        $record->TELEFONE, $record->CPF);
        return $coachData;
    }

    /*
        The method is responsibility to delete data in dataBase table.
    */
    public function deleteCoach($id){
        $sql = "DELETE FROM tecnico WHERE id_tecnico = '{$id}' ";
        $result = $this->connection->dataBase->Execute($sql);
    }

    /*
        The method is responsibility to count registers of Coach in dataBase table. 
    */
    public function amountCoachesRecords(){
        $sql = "SELECT COUNT(*) as contagem FROM tecnico";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        return $record->CONTAGEM;
    }
}