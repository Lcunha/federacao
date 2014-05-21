<?php

/*
    Name: TeamGameController.php
    Description: Class that performs the listing of teams and
    games already registered in the system in a table may exluir, edit, update and save.
 */
include_once(__APP_PATH . '/persistence/TeamGameDAO.php');
include_once(__APP_PATH . '/model/TeamGame.php');

class TeamGameController {

    private $teamGameDAO;

    public function __construct() {
        $this->teamGameDAO = new TeamGameDAO();
    }

    /*
        Function we list all data of the games that are being played on the table grabbing data from teams in the game.
    */
    public function _listTeamGameForTables(){
        $teamDataGame = new TeamGame();
        $arrayDataTeamGame = $this->teamGameDAO->listAllTeamGames();
        for ($i = 0; $i < count($arrayDataTeamGame); $i++){
            $teamDataGame = $arrayDataTeamGame[$i];
            $htmlTeamGame[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $teamDataGame->__getIdGame() . "</td>
          			<td>" . $teamDataGame->__getIdTeam() . "</td>
          			<td>
            			<a href=\"?pag=timeJogo&action=edit&id=" . $teamDataGame->__getTeamGame() .
                                "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=timeJogo&action=exclude&id=" . $teamDataGame->__getTeamGame() .
                                "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlTeamGame;
    }

    /*
        Function responsible for listing all games.
     */
    public function _listAllTeamGames(){
        return $this->teamGameDAO->listAllTeamGames();
    }

    /*
        Function responsible for performing a query by team.
    */
    public function _consultByTeam($idTeam){
        return $this->teamGameDAO->consultIdTeam($idTeam);
    }

    /*
        Function responsible for performing a query by time.
    */
    public function _consultByTime($idTime){
        return $this->teamGameDAO->consultByTime($idTime);
    }

    /*
        Function responsible for performing a query by game.
    */
    public function _insertTeamGame(TeamGame $teamGame){
        return $this->teamGameDAO->insertTeamGame($teamGame);
    }

    /*
        Function responsible for updating the game data.
        Receives as parameter the data team in a game to be updated 
        while they were game id, id team. Send this new data to the database and performs 
        the update. The function has no return.
    */

    public function _updateTeamGame($idGame, $idTeam){
        $teamDataGame = new TeamGame();
        $teamDataGame->__constructOverload($idGame, $idTeam);
        $this->teamGameDAO->updateTeamGame($teamDataGame);
    }

    /*
        Function salver responsible for the data of the games that are being played.
    */
    public function _saveTeamGame($idCurrentGame, $idTeam){
        $teamDataGame = new TeamGame();
        $teamDataGame->__constructOverload($idCurrentGame, $idTeam);
        $this->teamGameDAO->insertTeamGame($teamDataGame);
    }

    /*
        Function responsible for deleting the data on team playing.
    */
    public function _deleteTeamGame($idGame){
        return $this->teamGameDAO->deleteTeamGame($idGame);
    }

}
