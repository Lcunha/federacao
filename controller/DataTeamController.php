<?php

/*
    Name: DadosTimeController.php
    Description: Updates the points earned by teams in each match held.
 */
include_once('./persistence/DadosTimeDAO.php');
include_once('./model/DadosTime.php');

class DadosTimeController {

    private $dadosTimeDAO;

    public function __construct(){
        $this->dadosTimeDAO = new DadosTimeDAO();
    }

    /*
        Function responsible for listing all data Team.
    */
    public function _listarTodos(){
        return $this->dadosTimeDAO->listarTodos();
    }

    /*
        Function responsible for performing a query on a team by ID.
     */
    public function _consultarPorId($id){
        $dataDataTeam = new DadosTime();
        $dataDataTeam = $this->dadosTimeDAO->consultarPorId($id);
        //$arrayDados['nome'] = $dadosArbitro->__getNome();
        //$arrayDados['telefone'] = $dadosArbitro->__getTelefone();
        //$arrayDados['cpf'] = $dadosArbitro->__getCpf();

        return $arrayDados;
    }

    /*
        Function responsible for entering data of a team.
     */
    public function _inserir(DadosTime $dataTeam){
        return $this->dadosTimeDAO->inserir($dataTeam);
    }

    /*
        Responsible for updating the data team.
     */
    public function _atualizar($idDataTeam, $teamPoints, $playerTeam, $victoryTeam, $drawTeam, $lossTeam, $amountGoals, $concededGoals){
        $dataDataTeam = new DadosTime();
        $dataDataTeam->__constructOverload(0, $idDataTeam, $teamPoints, $playerTeam, $victoryTeam, 
                                             $drawTeam, $lossTeam, $amountGoals, $concededGoals);
        $this->dadosTimeDAO->atualizar($dataDataTeam);
    }

    /*
        Responsible for updating the scores of times in matches.
     */
    public function _atualizarPontos($idTeam1, $idTeam2, $goalsTeam1, $goalsTeam2) {
        if ($goalsTeam1 > $goalsTeam2) {
            $punctuation1 = 3;
            $punctuation2 = 0;
        } else if ($goalsTeam1 < $goalsTeam2) {
            $punctuation1 = 0;
            $punctuation2 = 3;
        } else if ($goalsTeam1 == $goalsTeam2) {
            $punctuation1 = 1;
            $punctuation2 = 1;
        }
        $this->dadosTimeDAO->atualizarPontos($idTeam1, $idTeam2, $punctuation1, $punctuation2, $goalsTeam1, $goalsTeam2);
    }

    /*
        Function responsible for deleting the data on time.
     */
    public function _excluir($id) {
        return $this->dadosTimeDAO->excluir($id);
    }

}
