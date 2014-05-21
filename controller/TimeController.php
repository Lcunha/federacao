<?php

/*
    Name: TimeController.php
    Description: List data from playtime in the table, performs a query,
    delete, change and updates the weather data, inserts the goals achieved by each team the match lasting.
 */
include_once('./persistence/TimeDAO.php');
include_once('./model/Time.php');

class TimeController {

    private $timeDAO;

    public function __construct(){
        $this->timeDAO = new TimeDAO();
    }
    /*
        Function responsible for listing the data of time.
    */
    public function _listAllTime(){
        return $this->timeDAO->listAllTimes();
    }

    /*
        Function responsible for inserting the time, entering the score, team and game that is being done.
        The funação has no input parameter and returns an array that stores the data for a time.
    */
    public function _listAllDataForTables(){
        $dataTime = new Time();
        $arrayDataTime = $this->timeDAO->listAllTimes();
        for ($i = 0; $i < count($arrayDataTime); $i++) {
            $dataTeamTime = $arrayDataTime[$i];
            $htmlLinesDataFromPlayers[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dataTime->__getIdTimePlay() . "</td>
          			<td>" . $dataTime->__getIdPlayer() . "</td>
          			<td>" . $dataTime->__getAmountSevenMetersTotal() . "</td>
          			<td>" . $dataTime->__getTimeCoach() . "</td>
          			<td>" . $dataTime->__getScoreboardTeam1() . "</td>
          			<td>" . $dataTime->__getScoreboardTeam2() . "</td>
          			<td>" . $dataTime->__getType() . "</td>
          			<td>
            			<a href=\"?pag=tempo&action=edit&id=" . $dataTime->__getIdTimePlay() .
                    "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tempo&action=exclude&id=" . $dataTime->__getIdTimePlay() . 
                    "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlLinesDataFromPlayers;
    }

    /*
        Function responsible for doing a query for a time from an id of a game.
    */
    public function _consultByIdTime($idTimePlay){
        $dataTime = new Time();
        $dataTime = $this->timeDAO->consultByIdTime($idTimePlay);
        $arrayData['idTimePlay'] = $dataTime->__getIdTimePlay();
        $arrayData['idGame'] = $dataTime->__getIdPlayer();
        $arrayData['type'] = $dataTime->__getType();
        $arrayData['amountSevenMetersTotal'] = $dataTime->__getAmountSevenMetersTotal();
        $arrayData['timeCoach'] = $dataTime->__getTimeCoach();
        $arrayData['scoreboardTeam1'] = $dataTime->__getScoreboardTeam1();
        $arrayData['scoreboardTeam2'] = $dataTime->__getScoreboardTeam2();

        return $arrayData;
    }

    /*
        Function responsible for doing a query for a time from an id of time report.
     */
    public function _consultByReport($amountReports){
        return $this->timeDAO->consultByReport($amountReports);
    }

    /*
        Function responsible for inserting a time table.
    */
    public function _insertTime($idPlayer){
        return $this->timeDAO->insertTime($idPlayer);
    }

    /*
        Function responsible for updating the data of games.
        Receives as parameter data length of a game to be updated, id team, 
        player id, amount full seven meters, team coach, scoreboard Team1, Team2 
        scoreboard, type. Send this new data to the database and performs the update.
        The function has no return.
    */
    public function _updateTime($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, 
                                $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Time();
        $dataTime->__constructOverload($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->timeDAO->updateTime($dataTime);
    }

    /*
        Function responsible for saving the data of time in the game.
        Receives as parameter input time data to be saved, and they player id, 
        amount full seven meters, team coach, team scoreboard, scoreboard team2, type. 
        This function will insert these new data in the database. Has no return.
    */
    public function _saveTime($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, 
                              $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Time();
        $dataTime->__constructOverload(0, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->timeDAO->insertTime($dataTime);
    }

    /*
        Function responsible for deleting the data on time.
        Receives as parameter id of a team so that data of a team 
        that has this id are deleted from the database. Having to return to deleteTeam function teamDAO class.
    */
    public function _deleteTime($idTime){
        return $this->timeDAO->deleteTime($idTime);
    }

    /*
        Function responsible for inserting a goal from team.
    */
    public function _insertGoalsTeam1($scoreboardA, $amountSevenMetersTotal, $idTeam){
        return $this->timeDAO->insertGoalsTeam1($scoreboardA, $amountSevenMetersTotal, $idTeam);
    }

    /*
        Function responsible for inserting a goal from team.
    */
    public function _insertGoalsTeam2($scoreboardB, $idTeamCurrent){
        return $this->timeDAO->insertGoalsTeam2($scoreboardB, $idTeamCurrent);
    }

    /*
        Function responsible for consulting the last record of time was registered.
    */
    public function _lastQueryRegistry(){
        $result = $this->timeDAO-> lastQueryRegistry();
        $idTeam = $result->Fields('id');
        return $idTeam;
    }

}
