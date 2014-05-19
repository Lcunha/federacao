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
        The function has no input paramentro.
    */
    public function _listAllData(){
        return $this->dataTeamDAO->listAllDataTeam();
    }

    /*
        Function responsible for performing a query on a team by ID.
        The function has as input the id of the data for a particular team and returns an 
        array with all the data the team id that the function receives input.
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
        Responsible for updating the data team.The function has as input 
        the data of a team and its return inserting these data into a table that stores the data team.
        The function has as input idDataTeam, teamPoints, playerTeam, victoryTeam, drawTeam, lossTeam, 
        amountGoals, concededGoals. This function has no return.
     */
    public function _updateDataTeam($idDataTeam, $teamPoints, $playerTeam, $victoryTeam, $drawTeam, 
                                    $lossTeam, $amountGoals, $concededGoals){
        $dataDataTeam = new DataTeam();
        $dataDataTeam->__constructOverload(0, $idDataTeam, $teamPoints, $playerTeam, $victoryTeam, 
                                             $drawTeam, $lossTeam, $amountGoals, $concededGoals);
        $this->dataTeamDAO->updateDataTeam($dataDataTeam);
    }

    /*
        Responsible for updating the scores of times in matches. 
        The function has as input the scores of the teams that 
        will be atualizandos, they being idTeam1, idTeam2, goalsTeam1, goalsTeam2.
        The function returns the updated points of matches.
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
        The function takes the id of a particular data table and 
        return the function call of dataTeamDAO class that excludes idDataTeam database.
     */
    public function _deleteDataTeam($idDataTeam) {
        return $this->dataTeamDAO->deleteDataTeam($idDataTeam);
    }

}
