<?php

/*
    Name: AjaxDadosView.php
    Description: View of players data.
*/
include_once('./controller/DadosController.php');

$playerId = $_GET["jogadorId"];
$playerGoal = $_GET["jogadorGol"];
$player1 = $_GET["jogadorA"];
$playerP = $_GET["jogadorP"];
$playerD = $_GET["jogadorD"];
$playerR = $_GET["jogadorR"];
$idTime = $_GET["idTempo"];

$DadoCO = new DadosController();
$DadoCO->_atualizarDados($playerId, $idTime, $jogadorA, $jogadorP, $playerD,
                         $jogadorR, $playerGoal);
