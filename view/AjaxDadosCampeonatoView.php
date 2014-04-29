<?php

/*
    Name: AjaxDataChampionshipView.php
    Description: View of championship data.
*/
include_once('./controller/DataTeamController.php');

$team1 = isset( $_GET['idA'] ) ? $_GET['idA'] : null;
$team2 = isset( $_GET['idB'] ) ? $_GET['idB'] : null;
$goalsTeam1 = isset( $_GET['golsTimeA'] ) ? $_GET['golsTimeA'] : null;
$goalsTeam2 = isset( $_GET['golsTimeB'] ) ? $_GET['golsTimeB'] : null;



$DataTeamCO = new DataTeamController();
$DataTeamCO->_updateDataPoint($team1, $team2, $goalsTeam1, $goalsTeam2);

