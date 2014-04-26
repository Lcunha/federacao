<?php

/*
    Name: AjaxGameDataView.php
    Description: View of players data.
*/
include_once('./controller/GameDataController.php');

$playerId = $_GET["jogadorId"];
$playerGoal = $_GET["jogadorGol"];
$player1 = $_GET["jogadorA"];
$playerP = $_GET["jogadorP"];
$playerD = $_GET["jogadorD"];
$playerR = $_GET["jogadorR"];
$idTimePlay = $_GET["idTempo"];

$GameDataCO = new GameDataController();
$GameDataCO->_updateGameData($playerId, $idTimePlay, $playerA, $playerP, $playerD,
                             $playerR, $playerGoal);