<?php

/*
    Name: TeamController.php
    Description:Classe responsavel por inserir os dados do team e dos
    jogadores na tabela, realiza, consulta, exclui, e atualiza a tabela.
 */
include_once(__APP_PATH . '/persistence/TeamDAO.php');
include_once(__APP_PATH . '/persistence/DataTeamDAO.php');
include_once(__APP_PATH . '/model/Team.php');
include_once(__APP_PATH . '/model/DataTeam.php');

class TeamController {

    private $teamDAO;

    public function __construct(){
        $this->teamDAO = new TeamDAO();
    }

    /*
        Responsible function to list all data Team.
    */
    public function _listAllTeamsForSelect(){
        $teamData = new Team();
        $arrayTeamData = $this->teamDAO->listAllTeams();
        for ($i = 0; $i < count($arrayTeamData); $i++){
            $teamData = $arrayTeamData[$i];
            $htmlOptionSelect[] = "<option value=\"" . $teamData->__getIdTeam() . "\">" . $teamData->__getTeamName() .
                    "</option>";
        }
        return $htmlOptionSelect;
    }

    /*
        Function responsible for listing all players.
    */
    public function _listAllPlayersTeam($idTeam){
        return $this->teamDAO->listAllPlayersTeam($idTeam);
    }

    /*
        Function responsible for all data list of registered teams in the table.
    */
    public function _listAllTeamsForTables(){
        $teamData = new Team();
        $arrayTeamData = $this->teamDAO->listAllTeams();
        for ($i = 0; $i < count($arrayTeamData); $i++){
            $teamData = $arrayTeamData[$i];
            $htmlLineDataFromTeams[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					
					<td>" . $teamData->__getTeamName() . "</td>
          			<td>" . $teamData->__getTeamCategory() . "</td>
          			<td>" . $teamData->__getTeamAddress() . "</td>
          			<td>" . $teamData->__getTeamFoundationDate() . "</td>
					<td>" . $teamData->__getTeamPresident() . "</td>
					<td>" . $teamData->__getTeamPhone() . "</td>
					<td>" . $teamData->__getTeamPoints() . "</td>
          			<td>
            			<a href=\"?pag=team&action=edit&id=" . $teamData->__getIdTeam() .
                    "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=team&action=delete&id=" . $teamData->__getIdTeam() .
                    "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlLineDataFromTeams;
    }

    /*
        Function responsible for listing all of the teams.
    */
    public function _listAllTeams(){
        return $this->teamDAO->listAllTeams();
    }

    /*
        Function responsible for listing all of the teams points.
    */
    public function _listAllTeamsByPoints(){
        return $this->teamDAO->listAllTeamsByPoints();
    }

    /*
        Responsible role by querying a team using an id.
    */
    public function _consultByIdTeam($id){
        $teamData = new Team();
        $teamData = $this->teamDAO->consultByIdTeam($id);
        $arrayDataTeam['idCoach'] = $teamData->__getIdTecnico();
        $arrayDataTeam['teamName'] = $teamData->__getTeamName();
        $arrayDataTeam['teamCategory'] = $teamData->__getTeamCategory();
        $arrayDataTeam['teamAddress'] = $teamData->__getTeamAddress();
        $arrayDataTeam['teamFoundationDate'] = $teamData->__getTeamFoundationDate();
        $arrayDataTeam['teamPresident'] = $teamData->__getTeamPresident();
        $arrayDataTeam['teamPhone'] = $teamData->__getTeamPhone();
        $arrayDataTeam['teamPoints'] = $teamData->__getTeamPoints();
        return $arrayDataTeam;
    }

    /*
        Function responsible for consulting by name.
    */
    public function _consultarByTeamName($teamName){
        return $this->teamDAO->consultByTeamName($teamName);
    }

    /*
        Function responsible for saving the data of a team.
    */
    public function _saveTeam($idCoach, $teamName, $teamCategory, $teamAddress, $teamFoundationDate, $teamPresident, $teamPhone){
        $teamData = new Team();
        $dataDataTeam = new DataTeam();
        $dataDataTeamDAO = new DataTeamDAO();
        $teamData->__constructOverload(0, $idCoach, $teamName, $teamCategory, $teamAddress, $teamFoundationDate, $teamPresident, $teamPhone, 0);
        $idTeam = $this->teamDAO->insertTeam($teamData);
        $dataDataTeam->__constructOverload(0, $idTeam, 0, 0, 0, 0, 0, 0, 0);
        return $dataDataTeamDAO->insertDataTeam($dataDataTeam);
    }

    /*
        Function responsible for updating the data of a team.
     */
    public function _updateTeam($idteam, $idCoach, $teamName, $teamCategory, $teamAddress, $teamFoundationDate, $teamPresident, $teamPhone){

        $teamData = new Team();
        $teamData->__constructOverload($idTeam, $idCoach, $teamName, $teamCategory, $teamAddress, $teamFoundationDate, $teamPresident, 
        $teamPhone, 0);
        $this->teamDAO->updateTeam($teamData);
    }

    /*
        Function responsible for deleting the data on team.
     */

    public function _deleteTeam($id){
        return $this->teamDAO->deleteTeam($idTeam);
    }

    /*
        Function responsible for counting the records of the teams.
    */
    public function _amountTeamsRecords(){
        return $this->teamDAO->amountTeamsRecords();
    }

    /*
        Function responsible for the data list of teams to a championship.
        Listing the balance in other matches played, points, games played, draws,
        wins, and dorrotas amount of goals achieved.
    */
    public function _listAllTeamsForChampionshipTable(){
        $teamData = new DataTeam();
        $team = new TeamController();
        $arrayTeamData = $this->teamDAO->listAllTeamsByPoints();
        $sizeArray = count($arrayTeamData);
        for ($i = 0; $i < $sizeArray; $i++){
            $teamData = $arrayTeamData[$i];
            $pos = $i;
            $pos++;
            $var = $team->_consultByIdTeam($teamData->__getIdTeam());
            $teamName = $var['teamName'];
            $saldo = $teamData->__getGoals() - $teamData->__getConcededGoals();
            if ($teamData->__get() != 0){
                $percentage = (int) ( 100 * ($teamData->__getVictories()) / ($teamData->__getPlays()));
            } else{
                $percentage = 0;
            }

            $htmlTableChampionship[] = " 
			<tr>
				<th class=\"th-piqueno th-cor\">" . $pos . "</th>
				<th class=\"th-cor\">$teamName</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getTeamPoints() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getPlays() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getVictories() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getDraws() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getDefeats() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getGoals() . "</th>
				<th class=\"th-piqueno th-cor\">" . $teamData->__getConcededGoals() . "</th>
				<th class=\"th-piqueno th-colir\">" . $balance . "</th>
				<th class=\"th-piqueno th-cor\">" . $percentage . "</th>
			</tr>
			";
        }
        return $htmlTableChampionship;
    }

}