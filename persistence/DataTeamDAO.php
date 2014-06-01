<?php

/*
    Name: DataTeamDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the associative type Data_Team, in the relevant table (table associative) 
    in mysql.
 */
include_once ('/../model/Coach.php');
include_once ('/../persistence/Connection.php');
include_once ('/../persistence/TeamDAO.php');

class DataTeamDAO{
	private $connection;
	
	/*
            The method is responsible to instance the class.
	*/
	public function __construct(){
            $this->connection = new Connection();
	}

	/*
            The function returns the team data.
            The method is responsible by list all registers in dataBase table.
	*/
	public function listAllDataTeam(){
            $sql = "SELECT * FROM dados_campeonato";
            $result = $this->connection->dataBase->Execute($sql);
            while($record = $result->FetchNextObject()){
                    $dataDataTeam = new DataTeam();
                    $dataDataTeam->__constructOverload($record->ID_DADOS_CAMPEONATO,
                                                         $record->TIME_ID_TIME,
                                                         $record->PONTOS, $record->JOGOS,
                                                         $record->VITORIAS,
                                                         $record->EMPATES,
                                                         $record->DERROTAS,
                                                         $record->GOLS,
                                                         $record->GOLS_LEVADOS);
                    $returnDataTeam[] = $dataDataTeam;
            }
            return $returnDataTeam;
	}

	/*
            The function receives as input parameter the data team data and 
            returns the sql execution.
            The method is responsible to insert data in dataBase table.
	*/
	public function insertDataTeam(DataTeam $dataDataTeam){
            $sql = "INSERT INTO dados_campeonato(pontos, jogos, vitorias, empates,
                                                 derrotas, gols, gols_levados, time_id_time)
                    VALUES ('{$dataDataTeam->__getTeamPoints()}', 
                            '{$dataDataTeam->__getPlayerTeam()}',
                            '{$dataDataTeam->__getVictoryTeam()}',
                            '{$dataDataTeam->__getDrawTeam()}',
                            '{$dataDataTeam->__getLossTeam()}',
                            '{$dataDataTeam->__getAmountGoals()}',
                            '{$dataDataTeam->__getConcededGoals()}',
                            '{$dataDataTeam->__getIdDataTeam()}')";
            return $this->connection->dataBase->Execute($sql);
	}

	/*
                The function receives as input parameter the id of data team and 
                returns the data of the data team.
		The method is responsible to consult in dataBase table through of ID.
	*/
	public function consultByIdDataTeam(DataTeam $idDataTeam){
            $sql = "SELECT * FROM dados_campeonato WHERE id_dados_campeonato = '{$idDataTeam}' ";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataDataTeam = new DataTeam();
            $dataDataTeam->__constructOverload($record->ID_DADOS_CAMPEONATO, 
                                                 $record->TIME_ID_TIME,
                                                 $record->PONTOS,
                                                 $record->JOGOS, $record->VITORIAS,
                                                 $record->EMPATES, $record->DERROTAS,
                                                 $record->GOLS,$record->GOLS_LEVADOS);
            return $dataDataTeam;
	}

	/*
            The function receives as input parameter the id of team and 
            returns the data of the data team.
            The method is responsible to consult in dataBase table through the ID of type Team.
	*/
	public function consultByIdTeam(DataTeam $idTeam){
            $sql = "SELECT * FROM dados_campeonato WHERE time_id_time = '{$idTeam}' ";
            $result = $this->connection->dataBase->Execute($sql);
            $record = $result->FetchNextObject();
            $dataDataTeam = new DataTeam();
            $dataDataTeam->__constructOverload($record->ID_DADOS_CAMPEONATO,
                                                 $record->TIME_ID_TIME, $record->PONTOS,
                                                 $record->JOGOS, $record->VITORIAS,
                                                 $record->EMPATES, $record->DERROTAS,
                                                 $record->GOLS, $record->GOLS_LEVADOS);
            return $dataDataTeam;
	}

	/*
            The function receives as input parameter the data of the data team and 
            returns the sql execution.
            The method is responsible to update data in dataBase table.
	*/
	public function updateDataTeam(DataTeam $dataDataTeam){
            $sql = "UPDATE dados_campeonato 
                    SET pontos = '{$dataDataTeam->__getTeamPoints()}', 
                        jogos = '{$dataDataTeam->__getPlayerTeam()}', 
                        vitorias = '{$dataDataTeam->__getVictoryTeam()}', 
                        empates = '{$dataDataTeam->__getDrawTeam()}', 
                        derrotas = '{$dataDataTeam->__getLossTeam()}', 
                        gols = '{$dataDataTeam->__getAmountGoals()}', 
                        gols_levados = '{$dataDataTeam->__getConcededGoals()}' 
                    WHERE time_id_time = '{$dataDataTeam->__getIdDataTeam()}' ";
            $this->connection->dataBase->Execute($sql);
	}

	/*
                The function receives as input parameter idTeam1, idTeam2, 
                pointsTeam1, pointsTeam2, goalsTeam1 and goalsTeam2.
		The method is responsible to update points and information data in 
                dataBase table.
	*/
	public function updateDataPoint($idTeam1, $idTeam2, $pointsTeam1, $pointsTeam2, $goalsTeam1,
                                        $goalsTeam2){
            $team1 = new TimeDAO();
            $team1 = $this->consultByIdTeam($idTeam1);
            $team2 = $this->consultByIdTeam($idTeam2);
            $newPlayer1 = $team1->__getPlayerTeam()+1;
            $newPlayer2 = $team2->__getPlayerTeam()+1;
            if($goalsTeam1 > $goalsTeam2){
                    $newVictory1= $team1->__getVictoryTeam() + 1;
                    $newDefeat2 = $team2->__drawTeam() + 1;
                    $newGoals1 = $team1->__getAmountGoals() + $goalsTeam1;
                    $newGoals2 = $team2->__getAmountGoals() + $goalsTeam2;
                    $newGoalsTaken1 = $team1->__getConcededGoals() + $goalsTeam2;
                    $newGoalsTaken2 = $team2->__getConcededGoals() + $goalsTeam1;
                    $newPoints1 = $team1->__getTeamPoints() + $pointsTeam1;
                    $newPoints2 = $team2->__getTeamPoints() + $pointsTeam2;
                    $sqlA = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints1}', 
                                 jogos = '{$newPlayer1}', 
                                 vitorias = '{$newVictory1}',
                                 gols = '{$newGoals1}', 
                                 gols_levados = '{$newGoalsTaken1}' 
                             WHERE time_id_time = '{$team1->__getIdDataTeam()}' ";
                    $sqlB = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints2}', 
                                 jogos = '{$newPlayer2}', 
                                 derrotas = '{$newDefeat2}',
                                 gols = '{$newGoals2}', 
                                 gols_levados = '{$newGoalsTaken2}' 
                             WHERE time_id_time = '{$team2->__getIdDataTeam()}' ";
            }
            else if($goalsTeam1 < $goalsTeam2){
                    $newVictory2 = $team2->__getVictoryTeam() + 1;
                    $newDefeat1 = $team1->__getLossTeam() + 1;
                    $newGoals1 = $team1->__getAmountGoals() + $goalsTeam1;
                    $newGoals2 = $team2->__getAmountGoals() + $goalsTeam2;
                    $newGoalsTaken1 = $team1->__getConcededGoals() + $goalsTeam2;
                    $newGoalsTaken2 = $team2->__getConcededGoals() + $goalsTeam1;
                    $newPoints1 = $team1->__getTeamPoints() + $pointsTeam1;
                    $newPoints2 = $team2->__getTeamPoints() + $pointsTeam2;
                    $sqlA = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints1}', jogos = '{$newPlayer1}', 
                                 derrotas='{$newDefeat1}', gols = '{$newGoals1}', 
                                 gols_levados = '{$newGoalsTaken1}' 
                             WHERE time_id_time = '{$team1->__getIdDataTeam()}' ";
                    $sqlB = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints2}', jogos = '{$newPlayer2}', 
                                 vitorias = '{$newVictory2}', gols = '{$newGoals2}', 
                                 gols_levados = '{$newGoalsTaken2}' 
                             WHERE time_id_time='{$team2->__getIdDataTeam()}' ";
            }
            else if($goalsTeam1 == $goalsTeam2){
                    $newDraws1 = $team1->__getDrawTeam() + 1;
                    $newDraws2 = $team2->__getDrawTeam() + 1;
                    $newGoals1 = $team1->__getAmountGoals() + $goalsTeam1;
                    $newGoals2 = $team2->__getAmountGoals() + $goalsTeam2;
                    $newGoalsTaken1 = $team1->__getConcededGoals() + $goalsTeam2;
                    $newGoalsTaken2 = $team2->__getConcededGoals() + $goalsTeam1;
                    $newPoints1 = $team1->__getTeamPoints() + $pointsTeam1;
                    $newPoints2 = $team2->__getTeamPoints() + $pointsTeam2;
                    $sqlA = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints1}', 
                                 jogos = '{$newPlayer1}', empates = '{$newDraws1}',
                                 gols = '{$newGoals1}', gols_levados = '{$newGoalsTaken1}' 
                             WHERE time_id_time = '{$team1->__getDataTeam()}' ";
                    $sqlB = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints2}', jogos = '{$newPlayer2}',
                                 empates = '{$newDraws2}', gols = '{$newGoals2}',
                                 gols_levados = '{$newGoalsTaken2}' 
                             WHERE time_id_time='{$team2->__getIdDataTeam()}' ";
            }
            $this->connection->dataBase->Execute($sqlA);
            $this->connection->dataBase->Execute($sqlB);
	}

	/*
            The function receives as input parameter the id of data team.
            The method responsibility is to delete data in dataBase table.
	*/
	public function deleteDataTeam($idDataTeam){
            $sql = "DELETE FROM dados_campeonato WHERE id_dados_campeonato = '{$idDataTeam}' ";
            $result = $this->connection->dataBase->Execute($sql);
	}
}