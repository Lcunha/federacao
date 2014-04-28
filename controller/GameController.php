<?php

/*
    Name: GameController.php
    Description: Inserts the game data in the table can make change,
    delete and query besides enter and save data in the table.
 */
include_once(__APP_PATH . '/persistence/GameDAO.php');
include_once(__APP_PATH . '/model/Game.php');

class GameController {

    private $gameDAO;

    public function __construct(){
        $this->gameDAO = new GameDAO();
    }

    /*
        Function responsible for listing the data of a game at a table.
    */
    public function _listAllGamesForTables(){
        $gameData = new Game();
        $arrayGameData = $this->gameDAO->listAllGames();
        for ($i = 0; $i < count($arrayGameData); $i++){
            $gameData = $arrayGameData[$i];
            $htmlGameData[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $gameData->__getIdGame() . "</td>
          			<td>" . $gameData->__getGameAudience() . "</td>
          			<td>" . $gameData->__getGameCity() . "</td>
          			<td>" . $gameData->__getGameLocation() . "</td>
          			<td>" . $gameData->__getGameDate() . "</td>
					<td>" . $gameData->__getGameDuration() . "</td>          			
          			<td>" . $gameData->__getTotal7Meters() . "</td>		
							<td>
            			<a href=\"?pag=jogo&action=edit&id=" . $gameData->__getIdGame() . "\"><img src=\".
                                    /views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=jogo&action=exclude&id=" . $gameData->__getIdGame() . "\"><img src=\".
                                    /views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlGameData;
    }

    /*
        Function responsible for listing the data of a game.
    */
    public function _listAllGames(){
        return $this->gameDAO->listAllGames();
    }

    /*
        Function responsible for performing a query by ID.
    */
    public function _consultByIdGame($idGame){
        $gameData = new Game();
        $gameData = $this->gameDAO->consultByIdGame($idGame);
        $arrayGameData['espectadores'] = $gameData->__getGameAudience();
        $arrayGameData['cidade'] = $gameData->__getGameCity();
        $arrayGameData['localizacao'] = $gameData->__getGameLocation();
        $arrayGameData['dataJogo'] = $gameData->__getGameDate();
        $arrayGameData['duracao'] = $gameData->__getGameDuration();
        $arrayGameData['total7Metros'] = $gameData->__getTotal7Meters();

        return $arrayGameData;
    }

    /*
        Function responsible for performing a query by date game.
    */
    public function _consultByGameDate($gameDate){
        return $this->gameDAO->consultByGameDate($gameDate);
    }

    /*
        Function responsible for entering data of a game.
    */
    public function _insertGame($gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration, $total7Meters){
        $gameData = new Game();
        $gameData->__constructOverload(0, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration, $total7Meters);
        return $this->gameDAO->insertGame($gameData);
    }

    /*
        Function responsible for updating the data of a game.
    */
    public function _updateGame($idGame, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameDuration){
        $gameData = new Game();
        $gameData->__constructOverload($idGame, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameDuration, $total7Meters);
        $this->gameDAO->updateGame($gameData);
    }

    /*
        Function responsible for saving the data of a new game already registered.
     */
    public function _saveGame($idTime1, $idTime2, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration){
        $gameData = new Game();
        $gameData->__constructOverload($idTime1, $idTime2, 0, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration);
        $this->gameDAO->insertGame($gameData);
    }

    /*
        Function responsible for deleting the data on game.
    */
    public function _deleteGame($idGame){
        return $this->gameDAO->deleteGame($idGame);
    }

}