<?php

/*
    Name: AjaxDataChampionshipView.php
    Description: View of championship data.
*/
include_once('./controller/DataTeamController.php');

$team1 = isset( $_GET['idA'] ) ? $_GET['idA'] : null;
$team2 = isset( $_GET['idB'] ) ? $_GET['idB'] : null;
$goalsTeam1 = isset( $_GET['goalsTeam1'] ) ? $_GET['goalsTeam1'] : null;
$goalsTeam2 = isset( $_GET['goalsTeam2'] ) ? $_GET['goalsTeam2'] : null;



$DataTeamCO = new DataTeamController();
$DataTeamCO->_updateDataPoint($team1, $team2, $goalsTeam1, $goalsTeam2);

