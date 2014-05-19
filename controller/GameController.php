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
        The function has no input parameter and returns an array with all the data of all table games.
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
        A função não possui nenhum parametro de entrada. E retorna a 
        chamada da função listAllGame da classe gameDAO. 
    */
    public function _listAllGames(){
        return $this->gameDAO->listAllGames();
    }

    /*
        Function responsible for performing a query by ID.
        The function has as input parameter the id of the game.
        And returns an aray with all game data.
    */
    public function _consultByIdGame($idGame){
        $gameData = new Game();
        $gameData = $this->gameDAO->consultByIdGame($idGame);
        $arrayGameData['gameAudience'] = $gameData->__getGameAudience();
        $arrayGameData['gameCity'] = $gameData->__getGameCity();
        $arrayGameData['gameLocation'] = $gameData->__getGameLocation();
        $arrayGameData['gameDate'] = $gameData->__getGameDate();
        $arrayGameData['gameDuration'] = $gameData->__getGameDuration();
        $arrayGameData['total7Meters'] = $gameData->__getTotal7Meters();

        return $arrayGameData;
    }

    /*
        Function responsible for performing a query by date game. A função possui como 
        parametro de entrada a data de um jogo cadastrado. E retorna uma consulta 
        no banco a partir da data desse jogo cadastrado.
    */
    public function _consultByGameDate($gameDate){
        return $this->gameDAO->consultByGameDate($gameDate);
    }

    /*
        Function responsible for entering data of a game.
        The function has as input parameter audience game, 
        city game, game location, date game, team game, game duration, total7 meters.
        The function returns all the data entered into the database.
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
        The function has as input parameter of id game, game audience, city game, 
        game location, date game, game duration. The function has no return.
     */
    public function _saveGame($idTime1, $idTime2, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration){
        $gameData = new Game();
        $gameData->__constructOverload($idTime1, $idTime2, 0, $gameAudience, $gameCity, $gameLocation, $gameDate, $gameTime, $gameDuration);
        $this->gameDAO->insertGame($gameData);
    }

    /*
        Function responsible for deleting the data on game.
        The function deletes a game on the table from sending the game id as 
        parameter the function.The function returns the call of the function deleteGame 
        gameDAO class, performing a deletion in the database.
    */
    public function _deleteGame($idGame){
        return $this->gameDAO->deleteGame($idGame);
    }

}