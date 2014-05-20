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
        The function has no input parameter returns data over a game already registered 
        in the database of the system through an array that stores all the game data.
    */
    public function _listAllDataForTables(){
        $generalGameData = new GameData();
        $arrayGameData = $this->gameDataDAO->listAllGameData();
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
        The function has no input parameter returns over all 
        data contained in a game gameDataDAO class through the listAllGameData function.
    */
    public function _listAllGameData(){
        return $this->gameDataDAO->listAllGameData();
    }

    /*
        Makes a query data stored games from an id entered by the User.
        The function has as input the id parameter data set. That stores 
        the data of a game like this function returns an array with all the data stored.
    */
    public function _consultByIdGameData($idGameData){
        $generalGameData = new GameData();
        $generalGameData = $this->gameDataDAO->consultByIdGameData($idGameData);
        $arrayGameData['amountWarning'] = $generalGameData->__getAmountWarnings();
        $arrayGameData['amountPunishment'] = $generalGameData->__getAmountPunishment();
        $arrayGameData['amountDisqualification'] = $generalGameData->__getAmountDisqualification();
        $arrayGameData['amountReports'] = $generalGameData->__getAmountReports();
        return $arrayGameData;
    }

    /*
        Makes a query of reports of games already registered.
        The function receives as parameter the variable that stores 
        the amount and reports from that variable it makes a query to the reports stored 
        in the database. The result of this query and stored in a variable and the function returns this variable.
    */
    public function _consultByAmountReports($amountReports){
        $generalGameData = new GameData();
        $generalGameData = $this->gameDataDAO->consultByAmountReports($amountReports);
        return $generalGameData;
    }

    /*
        Inserts the data team in a match.
        The function takes as input the parameter 
        idTimeInserted, idTeam1, idTeam2 variables. And insert this new data in the database. The function has no return.
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
            $this->gameDataDAO->insertGameData($team1Data);
        }
        for ($i = 0; $i < count($team2); $i++){
            $team2Data->__constructOverload(0, $team2[$i]->__getIdPlayer(), $idTimeInserted, 
                                            0, 0, 0, 0, 0);
            $this->gameDataDAO->insertGameData($team2Data);
        }
    }

    /*
         Responsible for updating the data of the games making the necessary changes to them.
         The function takes as input the parameter idGameData, idPlayer, idTimePlay, amountWarning,
         amountPunishment, amountDisqualification, amountReports, gameGoals variables. And all these 
         updated values ​​stored in variables in the database. The function has no return.
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
        Responsible for updating all the data matches.The function takes as input 
        the parameter idPlayer, idTimePlay, amountWarning, amountPunishment, amountDisqualification, 
        amountReports, gameGoals variables. Updating all data from a set contained in those variables in the database.
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
        The function takes as input the parameter idPlayer, idTimePlay, amountWarning, 
        amountPunishment, amountDisqualification, amountReports variables. Saving all these 
        new data from a game in the database. The function has no return.
    */
    public function _saveGameData($idPlayer, $idTimePlay, $amountWarning, $amountPunishment, 
                                  $amountDisqualification, $amountReports){
        $generalGameData = new GameData();
        $generalGameData->__constructOverload(0, $idPlayer, $idTimePlay, $amountWarning, 
                                              $amountPunishment, $amountDisqualification, 
                                              $amountReports);
        $this->gameDataDAO->insertGameData($generalGameData);
    }

    /*
        Function responsible for deleting the data on game.
    */
    public function _deleteGameData($idGameData){
        return $this->gameDataDAO->deleteGameData($idGameData);
    }
}