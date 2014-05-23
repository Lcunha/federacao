<?php

/*
    Name: GameView.php
    Description: This view allows to list all games, consult by game id, insert 
    game, save game, delete game and insert time.
 */
include_once('./controller/GameController.php');
include_once('./controller/TimeController.php');

class GameView{

    private $gameCO;
    private $timeCO;

    /*
      This function is responsible to instantiate the JogoController and 
      TempoController.
     */
    public function __construct(){
        $this->gameCO = new GameController();
        $this->timeCO = new TimeController();
    }

    /*
      The function returns to the data game controller the function.
      This function is responsible to list all the games.
     */
    public function listAllGames(){
        return $this->gameCO->_listAllGames();
    }

    /*
      This function is responsible to consult games by the idGame.
     */
    public function consultByGameId($idGame){
        return $this->gameCO->_consultByGameId($idGame);
    }

    /*
      This function is responsible to add a new game.
     */
    public function insertGame(){
        return $this->gameCO->_insertGame($_POST['espectadores'], $_POST['cidade'],
        $_POST['local'], $_POST['data'], $_POST['hora'], $_POST['duracao'], 0);
    }

    /*
      This function is responsible to save game information received by form.
     */
    public function saveGame(){
        return $this->gameCO->_saveGame($_POST['idTimeA'], $_POST['idTimeB'], 
        $_POST['espectadores'], $_POST['cidade'], $_POST['local'], 
        $_POST['data'], $_POST['hora'], $_POST['duracao']);
    }

    /*
      This function is responsible to delete a game.
     */
    public function deleteGame($idGame){
        return $this->gameCO->_deleteGame($idGame);
    }

    /*
      This function is responsible to add time to a game.
     */
    public function insertTime($idGame){
        return $this->timeCO->_insertTime($idGame);
    }

}
