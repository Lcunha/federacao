<?php

/*
    Name: CoachDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Coach, in the relevant table in mysql.
*/

include_once ('/../model/Coach.php');
include_once ('/../persistence/Connection.php');

class CoachDAO{
    private $connection;
	
    /*
        The method is responsibility to instance the class.
    */
    public function __construct(){
        $this->connection = new Connection();
    }
	
    /*
        The function returns the coach data.
        The method is responsibility to list all registers in dataBase table.
    */
    public function listAllCoaches(){
        $sql = "SELECT * FROM tecnico";
        $result = $this->connection->dataBase->Execute($sql);
        while($record = $result->FetchNextObject()){
            $coachData = new Coach();
            $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                             $record->TELEFONE, $record->CPF);
            $returnCoachData[] = $coachData;
        }
        return $returnCoachData;
    }
	
    /*
        The function receives as input parameter the coach data.
        The method is responsibility to insert data in dataBase table.
    */
    public function insertCoach(Coach $coachData){
        $sql = "INSERT INTO tecnico (nome , telefone, cpf) 
                VALUES ('{$coachData->__getCoachName()}', '{$coachData->__getCoachPhone()}',
                        '{$coachData->__getCoachCpf()}')";
       // $this->connection->dataBase->Execute($sql);
         $result = mysql_query($sql);
         return $result;
    }
	
    /*
        The function receives as input parameter the coach data and returns the 
        coach data.
        The method is responsibility to update data in dataBase table.
    */
    public function updateCoach(Coach $coachData){
        $sql = "UPDATE tecnico 
                SET nome = '{$coachData->__getCoachName()}', 
                    telefone = '{$coachData->__getCoachPhone()}', 
                    cpf = '{$coachData->__getCoachCpf()}' 
                WHERE id_tecnico = '{$coachData->__getIdCoach()}' ";
          $result = mysql_query($sql);
          return $result;
        
    }
	
    /*
        The function receives as input parameter the coach data and returns the 
        coach data.
        The method is responsibility to consult in dataBase table through of ID.
    */
    public function consultByIdCoach(Coach $idCoach){
        $sql = "SELECT * FROM tecnico WHERE id_tecnico = '{$idCoach}' ";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $coachData = new Coach();
        $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                        $record->TELEFONE, $record->CPF);
        return $coachData;
    }
	
    /*
        The function receives as input parameter the coach name and returns the 
        coach data.
        The method is responsibility to consult in dataBase table through of Name.
    */
    public function consultByCoachName(Coach $coachName){
        $sql = "SELECT * FROM tecnico WHERE nome = '{$coachName}'";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        $coachData = new Coach();
        $coachData->__constructOverload($record->ID_TECNICO, $record->NOME,
                                        $record->TELEFONE, $record->CPF);
        return $coachData;
    }

    /*
        The function receives as input parameter the coach id.
        The method is responsibility to delete data in dataBase table.
    */
    public function deleteCoach($idCoach){
        $sql = "DELETE FROM tecnico WHERE id_tecnico = '{$idCoach}' ";
        $result  = mysql_query($sql);
        return $result;
    }

    /*
        The function returns the record.
        The method is responsibility to count registers of Coach in dataBase table. 
    */
    public function amountCoachesRecords(){
        $sql = "SELECT COUNT(*) as contagem FROM tecnico";
        $result = $this->connection->dataBase->Execute($sql);
        $record = $result->FetchNextObject();
        return $record->CONTAGEM;
    }
}