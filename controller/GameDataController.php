<?php

/*
    Name:  GameDataController.php
    Description: Class that performs the listing of teams and games already registered in 
    the system in a table may exluir, edit, update and save.
*/
include_once('./persistence/GameDataDAO.php');
include_once('./model/GameData.php');
include_once('./model/Player.php');
include_once('./controller/PlayerController.php');
include_once('./controller/TeamController.php');

class GameDataController {
    private $gameDataDAO;

    public function __construct(){
        $this->gameDataDAO = new GameDataDAO();
    }

    /*
        Function responsible for receiving all game data reported by the User System.
    */
    public function _listAllDataForTables(){
        $generalGameData = new GameData();
        $arrayGameData = $this->gameDataDAO->listAllData();
        for ($i = 0; $i < count($arrayGameData); $i++){
            $generalGameData = $arrayGameData[$i];
            $htmLinesDataFromGameData[] = "
                	<tr>
                            <td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
                                <td>" . $generalGameData->__getIdGameData() . "</td>
          			<td>" . $generalGameData->__getIdPlayer() . "</td>
          			<td>" . $generalGameData->__getIdTimePlay() . "</td>
          			<td>" . $generalGameData->__getAmountWarnings() . "</td>
          			<td>" . $generalGameData->__getAmountPunishment() . "</td>
          			<td>" . $generalGameData->__getAmountDisqualification() . "</td>
          			<td>" . $generalGameData->__getAmountReports() . "</td>
          			<td>" . $generalGameData->__getGameGoals() . "</td>		
          			<td>
            			<a href=\"?pag=dados&action=edit&id=" . 
                                    $generalGameData->__getIdGameData() . "\"><img src=
                                    \"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=dados&action=exclude&id=" . 
                                    $generalGameData->__getIdGameData() . "\"><img src=
                                    \"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmLinesDataFromGameData;
    }

    /*
        Function responsible for listing all data of a game.
    */
    public function _listAllData(){
        return $this->gameDataDAO->listAllData();
    }

    /*
        Makes a query data stored games from an id entered by the User.
    */
    public function _consultByIdGameData($id){
        $generalGameData = new GameData();
        $generalGameData = $this->gameDataDAO->consultByIdGameData($id);
        $arrayGameData['amountWarning'] = $generalGameData->__getAmountWarnings();
        $arrayGameData['amountPunishment'] = $generalGameData->__getAmountPunishment();
        $arrayGameData['amountDisqualification'] = $generalGameData->__getAmountDisqualification();
        $arrayGameData['amountReports'] = $generalGameData->__getAmountReports();
        return $arrayGameData;
    }

    /*
        Makes a query of reports of games already registered.
    */
    public function _consultByAmountReports($amountReports){
        $generalGameData = new GameData();
        $generalGameData = $this->gameDataDAO->consultByAmountReports($amountReports);
        return $generalGameData;
    }

    /*
        Inserts the data team in a match.
    */
    public function _insertDataTeam($idTimeInserted, $idTeam1, $idTeam2){
        $team1Data = new GameData();
        $team2Data = new GameData();
        $teamCO = new TeamController();
        $team1 = $teamCO->_listAllPlayersTeam($idTeam1);
        $team2 = $teamCO->_listAllPlayersTeam($idTeam2);

        for ($i = 0; $i < count($team1); $i++){
            $team1Data->__constructOverload(0, $team1[$i]->__getIdPlayer(), $idTimeInserted, 
                                            0, 0, 0, 0, 0);
            $this->gameDataDAO->insertData($team1Data);
        }
        for ($i = 0; $i < count($team2); $i++){
            $team2Data->__constructOverload(0, $team2[$i]->__getIdPlayer(), $idTimeInserted, 
                                            0, 0, 0, 0, 0);
            $this->gameDataDAO->insertData($team2Data);
        }
    }

    /*
         Responsible for updating the data of the games making the necessary changes to them.
    */
    public function _updateData($idGameData, $idPlayer, $idTimePlay, $amountWarning,
                                $amountPunishment, $amountDisqualification, $amountReports, 
                                $gameGoals){
        $generalGameData = new GameData();
        $generalGameData->__constructOverload($idGameData, $idPlayer, $idTimePlay, $amountWarning, 
                                              $amountPunishment, $amountDisqualification, 
                                              $amountReports, $gameGoals);
        $this->gameDataDAO->updateData($generalGameData);
    }

    /*
        Responsible for updating all the data matches.
    */
    public function _updateGameData($idPlayer, $idTimePlay, $amountWarning, $amountPunishment, 
                                    $amountDisqualification, $amountReports, $gameGoals){
        $generalGameData = new GameData();
        $generalGameData->__constructOverload(0, $idPlayer, $idTimePlay, $amountWarning, 
                                              $amountPunishment, $amountDisqualification, 
                                              $amountReports, $gameGoals);
        $this->gameDataDAO->updateGameData($generalGameData);
    }

    /*
        Function responsible for saving the data of a new game already registered.
    */
    public function _saveData($idPlayer, $idTimePlay, $amountWarning, $amountPunishment, 
                            $amountDisqualification, $amountReports){
        $generalGameData = new GameData();
        $generalGameData->__constructOverload(0, $idPlayer, $idTimePlay, $amountWarning, 
                                              $amountPunishment, $amountDisqualification, 
                                              $amountReports);
        $this->gameDataDAO->insertData($generalGameData);
    }

    /*
        Function responsible for deleting the data on game.
    */
    public function _deleteData($id){
        return $this->gameDataDAO->deleteData($id);
    }
}