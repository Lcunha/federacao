<?php

/*
    Name: DadosTimeDAO.php  
    Description:Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the associative type Data_Team, in the relevant table (table associative) 
    in mysql.
 */
include_once ('./model/Coach.php');
include_once ('./persistence/Connection.php');
include_once ('./persistence/TeamDAO.php');

class DataTeamDAO{
	private $connection;
	
	/*
            The method is responsibility to instance the class.
	*/
	public function __construct(){
            $this->connection = new Conexao();
	}

	/*
            The method is responsibility by list all registers in database table.
	*/
	public function listAllData(){
            $sql = "SELECT * FROM dados_campeonato";
            $result = $this->connection->banco->Execute($sql);
            while($record = $result->FetchNextObject()){
                    $dataDataTeam = new DadosTime();
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
            The method is responsibility to insert data in database table.
	*/
	public function insertData(DadosTime $dataDataTeam){
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
            return $this->connection->banco->Execute($sql);
	}

	/*
		The method is responsibility to consult in database table through of ID.
	*/
	public function consultByIdData($id){
            $sql = "SELECT * FROM dados_campeonato WHERE id_dados_campeonato = '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
            $record = $result->FetchNextObject();
            $dataDataTeam = new DadosTime();
            $dataDataTeam->__constructOverload($record->ID_DADOS_CAMPEONATO, 
                                                 $record->TIME_ID_TIME,
                                                 $record->PONTOS,
                                                 $record->JOGOS, $record->VITORIAS,
                                                 $record->EMPATES, $record->DERROTAS,
                                                 $record->GOLS,$record->GOLS_LEVADOS);
            return $dataDataTeam;
	}

	/*
            The method is responsibility to consult in database table through the ID of type Team.
	*/
	public function consultarPorIdTime($id){
            $sql = "SELECT * FROM dados_campeonato WHERE time_id_time = '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
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
            The method is responsibility to update data in database table.
	*/
	public function atualizar(DadosTime $dataDataTeam){
            $sql = "UPDATE dados_campeonato 
                    SET pontos = '{$dataDataTeam->__getTeamPoints()}', 
                        jogos = '{$dataDataTeam->__getPlayerTeam()}', 
                        vitorias = '{$dataDataTeam->__getVictoryTeam()}', 
                        empates = '{$dataDataTeam->__getDrawTeam()}', 
                        derrotas = '{$dataDataTeam->__getLossTeam()}', 
                        gols = '{$dataDataTeam->__getAmountGoals()}', 
                        gols_levados = '{$dataDataTeam->__getConcededGoals()}' 
                    WHERE time_id_time = '{$dataDataTeam->__getIdDataTeam()}' ";
            $this->connection->banco->Execute($sql);
	}

	/*
		The method is responsibility by to update of points and information data in 
                database table.
	*/
	public function updateDataPoint($idTeam1, $idTeam2, $pointsTeam1, $pointsTeam2, $goalsTeam1,
                                        $goalsTeam2){
            $team1 = new TimeDAO();
            $team1 = $this->consultarPorIdTime($idTeam1);
            $team2 = $this->consultarPorIdTime($idTeam2);
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
                                 vitorias = '{$novaVitoriaA}',
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
                    $novaVitoriaB = $team2->__getVictoryTeam() + 1;
                    $novaDerrotaA = $team1->__getLossTeam() + 1;
                    $newGoals1 = $team1->__getAmountGoals() + $goalsTeam1;
                    $newGoals2 = $team2->__getAmountGoals() + $goalsTeam2;
                    $newGoalsTaken1 = $team1->__getConcededGoals() + $goalsTeam2;
                    $newGoalsTaken2 = $team2->__getConcededGoals() + $goalsTeam1;
                    $newPoints1 = $team1->__getTeamPoints() + $pointsTeam1;
                    $newPoints2 = $team2->__getTeamPoints() + $pointsTeam2;
                    $sqlA = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints1}', jogos = '{$newPlayer1}', 
                                 derrotas='{$novaDerrotaA}', gols = '{$newGoals1}', 
                                 gols_levados = '{$newGoalsTaken1}' 
                             WHERE time_id_time = '{$team1->__getIdDataTeam()}' ";
                    $sqlB = "UPDATE dados_campeonato 
                             SET pontos = '{$newPoints2}', jogos = '{$newPlayer2}', 
                                 vitorias = '{$novaVitoriaB}', gols = '{$newGoals2}', 
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
            $this->connection->banco->Execute($sqlA);
            $this->connection->banco->Execute($sqlB);
	}

	/*
            The method is responsibility by to delete data in database table.
	*/
	public function deleteData($id){
            $sql = "DELETE FROM dados_campeonato WHERE id_dados_campeonato = '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
	}
}