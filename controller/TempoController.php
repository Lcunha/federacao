<?php

/*
    Name: TempoController.php
    Description: List data from playtime in the table, performs a query,
    delete, change and updates the weather data, inserts the goals achieved by each team the match lasting.
 */
include_once('./persistence/TempoDAO.php');
include_once('./model/Tempo.php');

class TempoController {

    private $tempoDAO;

    public function __construct(){
        $this->tempoDAO = new TempoDAO();
    }
    /*
        Function responsible for listing the data of time.
    */
    public function _listarTodos(){
        return $this->tempoDAO->listarTodos();
    }

    /*
        Function responsible for inserting the time, entering the score, team and game that is being done.
    */
    public function _listarDadosParaTabela(){
        $dataTime = new Tempo();
        $arrayDataTime = $this->tempoDAO->listarTodos();
        for ($i = 0; $i < count($arrayDataTime); $i++) {
            $dataTeamTime = $arrayDataTime[$i];
            $htmlLinesDataFromPlayers[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dataTime->__getIdTempo() . "</td>
          			<td>" . $dataTime->__getIdJogo() . "</td>
          			<td>" . $dataTime->__getTiro7Metros() . "</td>
          			<td>" . $dataTime->__getTempoTecnico() . "</td>
          			<td>" . $dataTime->__getPlacarTime1() . "</td>
          			<td>" . $dataTime->__getPlacarTime2() . "</td>
          			<td>" . $dataTime->__getTipo() . "</td>
          			<td>
            			<a href=\"?pag=tempo&action=edit&id=" . $dataTime->__getIdTempo() .
                    "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tempo&action=exclude&id=" . $dataTime->__getIdTempo() . 
                    "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlLinesDataFromPlayers;
    }

    /*
        Function responsible for doing a query for a time from an id of a game.
    */
    public function _consultarPorId($id){
        $dataTime = new Tempo();
        $dataTime = $this->tempoDAO->consultarPorId($id);
        $arrayData['idTempo'] = $dataTime->__getIdTempo();
        $arrayData['idJogo'] = $dataTime->__getIdJogo();
        $arrayData['tipo'] = $dataTime->__getTipo();
        $arrayData['tiro7Metros'] = $dataTime->__getTiro7Metros();
        $arrayData['tempoTecnico'] = $dataTime->__getTempoTecnico();
        $arrayData['placarTime1'] = $dataTime->__getPlacarTime1();
        $arrayData['placarTime2'] = $dataTime->__getPlacarTime2();

        return $arrayData;
    }

    /*
        Function responsible for doing a query for a time from an id of time report.
     */
    public function _consultarPorRelatorio($amountReports){
        return $this->tempoDAO->consultarPorRelatorio($amountReports);
    }

    /*
        Function responsible for inserting a time table.
    */
    public function _inserirTempo($idPlayer){
        return $this->tempoDAO->inserirTempo($idPlayer);
    }

    /*
        Function responsible for updating the data of games.
    */
    public function _atualizar($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Tempo();
        $dataTime->__constructOverload($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->tempoDAO->atualizar($dadosDados);
    }

    /*
        Function responsible for saving the data of time in the game.
    */
    public function _salvar($idTeam, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type){
        $dataTime = new Tempo();
        $dataTime->__constructOverload(0, $idPlayer, $amountSevenMetersTotal, $timeCoach, $scoreboardTeam1, $scoreboardTeam2, $type);
        $this->tempoDAO->inserir($dataTime);
    }

    /*
        Function responsible for deleting the data on time.
    */
    public function _excluir($id){
        return $this->tempoDAO->excluir($id);
    }

    /*
        Function responsible for inserting a goal from team.
    */
    public function _inserirGolTimeA($scoreboardA, $amountSevenMetersTotal, $idTeam){
        return $this->tempoDAO->inserirGolTimeA($scoreboardA, $amountSevenMetersTotal, $idTeam);
    }

    /*
        Function responsible for inserting a goal from team.
    */
    public function _inserirGolTimeB($scoreboardB, $idTeamCurrent){
        return $this->tempoDAO->inserirGolTimeB($scoreboardB, $idTeamCurrent);
    }

    /*
        Function responsible for consulting the last record of time was registered.
    */
    public function _consultarUltimoRegistro(){
        $result = $this->tempoDAO->consultarUltimoRegistro();
        $idTeam = $result->Fields('id');
        return $idTeam;
    }

}
