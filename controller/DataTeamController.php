<?php

/*
    Name: DataTeamController.php
    Description: Updates the points earned by teams in each match held.
 */
include_once('./persistence/DataTeamDAO.php');
include_once('./model/DataTeam.php');

class DataTeamController {

    private $dataTeamDAO;

    public function __construct(){
        $this->dataTeamDAO = new DataTeamDAO();
    }

    /*
        Function responsible for listing all data Team.
    */
    public function _listAllData(){
        return $this->dataTeamDAO->listAllDataTeam();
    }

    /*
        Function responsible for performing a query on a team by ID.
     */
    public function _consultByIdDataTeam($idDataTeam){
        $dataDataTeam = new DataTeam();
        $dataDataTeam = $this->dataTeamDAO->consultByIdDataTeam($idDataTeam);
        //$arrayDataTeam['nome'] = $dadosArbitro->__getNome();
        //$arrayDataTeam['telefone'] = $dadosArbitro->__getTelefone();
        //$arrayDataTeam['cpf'] = $dadosArbitro->__getCpf();

        return $arrayDataTeam;
    }

    /*
        Function responsible for entering data of a team.
     */
    public function _insertDataTeam(DataTeam $dataTeam){
        return $this->dataTeamDAO->insertDataTeam($dataTeam);
    }

    /*
        Responsible for updating the data team.
     */
    public function _updateDataTeam($idDataTeam, $teamPoints, $playerTeam, $victoryTeam, $drawTeam, $lossTeam, $amountGoals, $concededGoals){
        $dataDataTeam = new DataTeam();
        $dataDataTeam->__constructOverload(0, $idDataTeam, $teamPoints, $playerTeam, $victoryTeam, 
                                             $drawTeam, $lossTeam, $amountGoals, $concededGoals);
        $this->dataTeamDAO->updateDataTeam($dataDataTeam);
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
        $this->dataTeamDAO->updateDataPoint($idTeam1, $idTeam2, $punctuation1, $punctuation2, $goalsTeam1, $goalsTeam2);
    }

    /*
        Function responsible for deleting the data on time.
     */
    public function _deleteDataTeam($idDataTeam) {
        return $this->dataTeamDAO->deleteDataTeam($idDataTeam);
    }

}
