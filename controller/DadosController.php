<?php

/*
  Name:  DadosControle.php
  Description:Class that performs the listing of teams
  and games already registered in the system in a table may exluir, edit, update and save.
 */

include_once('./persistence/DadosDAO.php');
include_once('./model/Dados.php');
include_once('./model/Jogador.php');
include_once('./controller/JogadorController.php');
include_once('./controller/TimeController.php');

class DadosController {

    private $dadosDAO;

    public function __construct() {
        $this->dadosDAO = new DadosDAO();
    }

    /*
      Function responsible for receiving all game data reported by the User System.
     */

    public function _listarDadosParaTabela() {
        $dadosDados = new Dados();
        $arrayDados = $this->dadosDAO->listarTodos();
        for ($i = 0; $i < count($arrayDados); $i++) {
            $dadosDados = $arrayDados[$i];
            $arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dadosDados->__getIdDados() . "</td>
          			<td>" . $dadosDados->__getIdJogador() . "</td>
          			<td>" . $dadosDados->__getIdTempo() . "</td>
          			<td>" . $dadosDados->__getAdvertencia() . "</td>
          			<td>" . $dadosDados->__getPunicao() . "</td>
          			<td>" . $dadosDados->__getDesqualificacao() . "</td>
          			<td>" . $dadosDados->__getRelatorio() . "</td>
          			<td>" . $dadosDados->__getGol() . "</td>		
          			<td>
            			<a href=\"?pag=dados&action=edit&id=" . $dadosDados->__getIdDados() . "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=dados&action=exclude&id=" . $dadosDados->__getIdDados() . "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $arrayTr;
    }

    /*
      Function responsible for listing all data of a game.
     */

    public function _listarTodos() {
        return $this->dadosDAO->listarTodos();
    }

    /*
      Makes a query data stored games from an id entered by the User.
     */

    public function _consultarPorId($id) {
        $dadosDados = new Dados();
        $dadosDados = $this->dadosDAO->consultarPorId($id);
        $arrayDados['advertencia'] = $dadosDados->__getAdvertencia();
        $arrayDados['punicao'] = $dadosDados->__getPunicao();
        $arrayDados['desqualificacao'] = $dadosDados->__getDesqualificacao();
        $arrayDados['relatorio'] = $dadosDados->__getRelatorio();

        return $arrayDados;
    }

    /*
      Makes a query of reports of games already registered.
     */

    public function _consultarPorRelatorio($relatorio) {
        $dadosDados = new Dados();
        $dadosDados = $this->dadosDAO->consultarPorRelatorio($relatorio);
        return $dadosDados;
    }

    /*
      Inserts the data team in a match.
     */

    public function _inserir($idTempoInserido, $idTimeA, $idTimeB) {
        $dadosTimeA = new Dados();
        $dadosTimeB = new Dados();
        $timeCO = new TimeController();
        $timeA = $timeCO->_listarTodosJogadores($idTimeA);
        $timeB = $timeCO->_listarTodosJogadores($idTimeB);

        for ($i = 0; $i < count($timeA); $i++) {
            $dadosTimeA->__constructOverload(0, $timeA[$i]->__getIdJogador(), $idTempoInserido, 0, 0, 0, 0, 0);
            $this->dadosDAO->inserir($dadosTimeA);
        }
        for ($i = 0; $i < count($timeB); $i++) {
            $dadosTimeB->__constructOverload(0, $timeB[$i]->__getIdJogador(), $idTempoInserido, 0, 0, 0, 0, 0);
            $this->dadosDAO->inserir($dadosTimeB);
        }
    }

    /*
      Responsible for updating the data of the games making the necessary changes to them.
     */

    public function _atualizar($idDados, $idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio, $gol) {
        $dadosDados = new Dados();
        $dadosDados->__constructOverload($idDados, $idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio, $gol);
        $this->dadosDAO->atualizar($dadosDados);
    }

    /*
      Responsible for updating all the data matches.
     */

    public function _atualizarDados($idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio, $gol) {
        $dadosDados = new Dados();
        $dadosDados->__constructOverload(0, $idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio, $gol);
        $this->dadosDAO->atualizarDados($dadosDados);
    }

    /*
      Function responsible for saving the data of a new game already registered.
     */

    public function _salvar($idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio) {
        $dadosDados = new Dados();
        $dadosDados->__constructOverload(0, $idJogador, $idTempo, $advertencia, $punicao, $desqualificacao, $relatorio);
        $this->dadosDAO->inserir($dadosDados);
    }

    /*
      Function responsible for deleting the data on game.
     */

    public function _excluir($id) {
        return $this->dadosDAO->excluir($id);
    }

}