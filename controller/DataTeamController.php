<?php

/*
    Name: DadosTimeController.php
    Description: Updates the points earned by teams in each match held.
 */
include_once('./persistence/DataTeamDAO.php');
include_once('./model/DadosTime.php');

class DadosTimeController {

    private $dataTeamDAO;

    public function __construct(){
        $this->dataTeamDAO = new DataTeamDAO();
    }

    /*
        Function responsible for listing all data Team.
    */
    public function _listAllData(){
        return $this->dadosTimeDAO-> listAllData();
    }

    /*
        Function responsible for performing a query on a team by ID.
     */
    public function _consultByIdData($id){
        $dataDataTeam = new DadosTime();
        $dataDataTeam = $this->dadosTimeDAO->consultByIdData($id);
        //$arrayDados['nome'] = $dadosArbitro->__getNome();
        //$arrayDados['telefone'] = $dadosArbitro->__getTelefone();
        //$arrayDados['cpf'] = $dadosArbitro->__getCpf();

        return $arrayDados;
    }

    /*
        Function responsible for entering data of a team.
     */
    public function _insertData(DadosTime $dataTeam){
        return $this->dadosTimeDAO->insertData($dataTeam);
    }

    /*
        Responsible for updating the data team.
     */
    public function _updateData($idDataTeam, $teamPoints, $playerTeam, $victoryTeam, $drawTeam, $lossTeam, $amountGoals, $concededGoals){
        $dataDataTeam = new DadosTime();
        $dataDataTeam->__constructOverload(0, $idDataTeam, $teamPoints, $playerTeam, $victoryTeam, 
                                             $drawTeam, $lossTeam, $amountGoals, $concededGoals);
        $this->dadosTimeDAO->updateData($dataDataTeam);
    }

    /*
        Responsible for updating the scores of times in matches.
     */
    public function _updateDataPoint($idTeam1, $idTeam2, $goalsTeam1, $goalsTeam2) {
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
        $this->dadosTimeDAO->updateDataPoint($idTeam1, $idTeam2, $punctuation1, $punctuation2, $goalsTeam1, $goalsTeam2);
    }

    /*
        Function responsible for deleting the data on time.
     */
    public function _deleteData($id) {
        return $this->dadosTimeDAO->deleteData($id);
    }

}
