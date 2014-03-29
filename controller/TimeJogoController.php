<?php

/*
    Name: TimeJogoController.php
    Description: Class that performs the listing of teams and
    games already registered in the system in a table may exluir, edit, update and save.
 */
include_once(__APP_PATH . '/persistence/TimeJogoDAO.php');
include_once(__APP_PATH . '/model/TimeJogo.php');

class TimeJogoController {

    private $timeJogoDAO;

    public function __construct() {
        $this->timeJogoDAO = new TimeJogoDAO();
    }

    /*
        Function we list all data of the games that are being played on the table grabbing data from teams in the game.
    */
    public function _listarTimeJogoParaTabela(){
        $dadosTimeJogo = new TimeJogo();
        $arrayDadosTimeJogo = $this->timeJogoDAO->listarTodos();
        for ($i = 0; $i < count($arrayDadosTimeJogo); $i++){
            $dadosTimeJogo = $arrayDadosTimeJogo[$i];
            $arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dadosTimeJogo->__getIdJogo() . "</td>
          			<td>" . $dadosTimeJogo->__getIdTime() . "</td>
          			<td>
            			<a href=\"?pag=timeJogo&action=edit&id=" . $dadosTimeJogo->__getTimeJogo() .
                                "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=timeJogo&action=exclude&id=" . $dadosTimeJogo->__getTimeJogo() .
                                "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $arrayTr;
    }

    /*
        Function responsible for listing all games.
     */
    public function _listarTodos(){
        return $this->timeJogoDAO->listarTodos();
    }

    /*
        Function responsible for performing a query by team.
    */
    public function _consultarPorTime($idTime){
        return $this->timeJogoDAO->consultarPorTime($idTime);
    }

    /*
        Function responsible for performing a query by time.
    */
    public function _consultarPorTempo($idTempo){
        return $this->timeJogoDAO->consultarPorTempo($idTempo);
    }

    /*
        Function responsible for performing a query by game.
    */
    public function _inserirTimeJogo(TimeJogo $timeJogo){
        return $this->timeJogoDAO->inserir($timeJogo);
    }

    /*
        Function responsible for updating the game data.
    */

    public function _atualizar($idJogo, $idTime){
        $dadosTimeJogo = new TimeJogo();
        $dadosTimeJogo->__constructOverload($idJogo, $idTime);
        $this->timeJogoDAO->atualizar($dadosTimeJogo);
    }

    /*
        Function salver responsible for the data of the games that are being played.
    */
    public function _salvar($idJogoAtual, $idTime){
        $dadosTimeJogo = new TimeJogo();
        $dadosTimeJogo->__constructOverload($idJogoAtual, $idTime);
        $this->timeJogoDAO->inserir($dadosTimeJogo);
    }

    /*
        Function responsible for deleting the data on team playing.
    */
    public function _excluir($id){
        return $this->timeJogoDAO->excluir($id);
    }

}
