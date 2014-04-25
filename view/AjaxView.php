<?php

/*
    Name: AjaxView.php
    Description: View of score.
*/
include_once('./controller/TimeController.php');

$socoreboardA = $_GET["scoreboardA"];
$scoreboardB = $_GET["scoreboardB"];
$amountSevenMetersA = $_GET["amountSevenMetersA"];
$amountSevenMetersB = $_GET["amountSevenMetersB"];
$amountSevenMetersTotal = $amountSevenMetersA + $amountSevenMetersB;

$timeCO = new TimeController();
$arrayTimeData = $timeCO->_listAllTimes();
$idActualTime = $timeCO->_consultLastRecordInserted();
$timeCO->_insertGoalTeamA($scoreboardA, $amountSevenMetersTotal, $idActualTime);
$timeCO->_insertGoalTeamB($scoreboardB, $idActualTime);