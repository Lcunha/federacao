<?php

/*
	Name: TeamDAO.php  
	Description:Class data persistence with CRUD functions (create, read, 
	update, delete) for handling the type Team, in the relevant table in mysql.
*/

include_once ('./model/Team.php');
include_once ('./model/Player.php');
include_once ('./persistence/Connection.php');

class TeamDAO{
	private $connection;
	
	/*
            The method is responsibility by to instance the class and initialize
            conection with database.
	*/
	public function __construct(){
		$this->connection = new Connection();
	}
	
	/*
            The method is responsibility by to list all registers in database table
            of type Team.
	*/
	public function listAllTeam(){
		$sql = "SELECT * FROM time";
		$result = $this->connection->dataBase->Execute($sql);
		while($record = $result->FetchNextObject()){
			$teamData = new Team();
			$teamData->__constructOverload($record->ID_TIME, $record->TECNICO_ID_TECNICO,
							$record->NOME,$record->CATEGORIA, 
							$record->ENDERECO, $record->DATA_FUNDACAO, 
							$record->PRESIDENTE, $record->TELEFONE);
			$returnTeamData[] = $teamData;
		}
		return $returnTeamData;
	}

	/*
            The method is responsibility by to list all registers in database table 
            of type Player.
	*/
	public function listarAllPlayersTeam($idTeam){
		$sql = "SELECT * FROM jogador WHERE time_id_time = '{$idTeam}'";
		$result = $this->connection->dataBase->Execute($sql);
		while($record = $result->FetchNextObject()){
			$playerData = new Player();
			$playerData->__constructOverload($record->ID_JOGADOR, $record->TIME_ID_TIME,
                                                           $record->NOME, $record->DATA_NASCIMENTO,
                                                           $record->CPF, $record->NUMERO);
			$returnPlayerData[] = $playerData;
		}
		return $returnPlayerData;
	}

	/*
            The method is responsibility by to list all registers im database table
            through type of campionship data and team.
	*/
	public function listAllTeamsByPoints(){
		$sql = "SELECT t.id_time, dc.pontos, dc.jogos, dc.vitorias, dc.empates, 
                               dc.derrotas, dc.gols, dc.gols_levados
			FROM dados_campeonato dc,time t
			WHERE t.id_time = dc.time_id_time
			ORDER BY dc.pontos DESC;";
		$result = $this->connection->dataBase->Execute($sql);
		while($record = $result->FetchNextObject()){
			$teamData = new DadosTeam();
			$teamData->__constructOverload(0, $record->ID_TIME, $record->PONTOS, 
							$record->JOGOS, $record->VITORIAS,
							$record->EMPATES,$record->DERROTAS,
							$record->GOLS,$record->GOLS_LEVADOS);
			$returnTeamData[] = $teamData;
		}
		return $returnTeamData;
	}

	/*
            The method is responsibility by to insert data in database table.
	*/
	public function insertTeam(Team $teamData){
		$sql = "INSERT INTO time (tecnico_id_tecnico, nome, categoria, endereco, 
					  data_fundacao, presidente, telefone) 
			VALUES ('{$teamData->__getIdCoach()}',
				'{$teamData->__getTeamName()}', '{$teamData->__getTeamCategory()}', 
				'{$teamData->__getTeamAddress()}', '{$teamData->__getTeamFoundationDate()}', 
				'{$teamData->__getTeamPresident()}', '{$teamData->__getTeamPhone()}')";
		$this->connection->dataBase->Execute($sql);
		return mysql_insert_id();
	}
	
	/*
            The method is responsibility by to update data in database table.
	*/
	public function atualizar(Team $teamData){
		$sql = "UPDATE time 
			SET tecnico_id_tecnico = '{$teamData->__getIdCoah()}',
                            nome = '{$teamData->__getTeamName()}', 
                            categoria = '{$teamData->__getTeamCategory()}', 
                            endereco = '{$teamData->__getTeamAddress()}', 
                            data_fundacao = '{$teamData->__getTeamFoundationDate()}', 
                            presidente = '{$teamData->__getTeamPresident()}', 
                            telefone = '{$teamData->__getTeamPhone()}' 
			WHERE id_time = '{$teamData->__getIdTeam()}' ";
		$this->connection->dataBase->Execute($sql);
		return $teamData;
	}
	
	/*
            The method is responsibility by to consult in database table through of ID.
	*/
	public function consultByIdTeam($idTeam){
		$sql = "SELECT * FROM time WHERE id_time = '{$idTeam}'";
		$result = $this->connection->dataBase->Execute($sql);
		$record = $result->FetchNextObject();
		$teamData = new Team();
		$teamData->__constructOverload($record->ID_TIME, $record->TECNICO_ID_TECNICO, 
						$record->NOME, $record->CATEGORIA, 
						$record->ENDERECO, $record->DATA_FUNDACAO, 
						$record->PRESIDENTE, $record->TELEFONE);
		return $teamData;
	}
	
	/*
            The method is responsibility by to consult in database table through of Name.
	*/
	public function consultByTeamName($teamName){
		$sql = "SELECT * FROM time WHERE nome = '{$teamName}'";
		$result = $this->connection->dataBase->Execute($sql);
		$record = $result->FetchNextObject();
		$teamData = new Team();
		$teamData->__constructOverload($record->ID_TIME, $record->TECNICO_ID_TECNICO,
						$record->NOME, $record->CATEGORIA, 
						$record->ENDERECO, $record->DATA_FUNDACAO, 
						$record->PRESIDENTE, $record->TELEFONE, 
						$record->PONTOS);
		return $teamData;
	}

	/*
            The method is responsibility by to delete data in database table.
	*/
	public function deleteTeam($idTeam){
		$sql = "DELETE FROM time WHERE id_time = '{$idTeam}' ";
		$result = $this->connection->dataBase->Execute($sql);
	}

	/*
            The method is responsiblity by to count registers of team's in database.
	*/
	public function amountTeamsRecords(){
		$sql = "SELECT COUNT(*) as contagem FROM time";
		$result = $this->connection->dataBase->Execute($sql);
		$record = $result->FetchNextObject();
		return $record->CONTAGEM;
	}
}

