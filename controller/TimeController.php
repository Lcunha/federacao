<?php

/*
    Name: TempoController.php
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
    public function _consultByIdTime($idTime){
        $dataTime = new Time();
        $dataTime = $this->timeDAO->consultByIdTime($idTime);
        $arrayData['idTempo'] = $dataTime->__getIdTimePlay();
        $arrayData['idJogo'] = $dataTime->__getIdPlayer();
        $arrayData['tipo'] = $dataTime->__getType();
        $arrayData['tiro7Metros'] = $dataTime->__getAmountSevenMetersTotal();
        $arrayData['tempoTecnico'] = $dataTime->__getTimeCoach();
        $arrayData['placarTime1'] = $dataTime->__getScoreboardTeam1();
        $arrayData['placarTime2'] = $dataTime->__getScoreboardTeam2();

        return $arrayData;
    }

    /*
        Function responsible for doing a query for a time from an id of time report.
     */
    public function _consultByReport($amountReports){
        return $this->timeDAO->consultarPorRelatorio($amountReports);
    }

    /*
        Function responsible for inserting a time table.
    */
    public function _insertTime($idPlayer){
        return $this->timeDAO->insertTime($idPlayer);
    }

    /*
        Function responsible for updating the data of games.
    */
    public function _updateTime($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Tempo();
        $dataTime->__constructOverload($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->timeDAO->updateTime($dadosDados);
    }

    /*
        Function responsible for saving the data of time in the game.
    */
    public function _saveTime($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Tempo();
        $dataTime->__constructOverload(0, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->timeDAO->inserir($dataTime);
    }

    /*
        Function responsible for deleting the data on time.
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
