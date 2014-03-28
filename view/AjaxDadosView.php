<?php
/*
    Name: AjaxDadosView.php
    Description: View of players data.
*/
include_once('./controller/DadosController.php');

$jogadorId = $_GET["jogadorId"];
$jogadorGol = $_GET["jogadorGol"];
$jogadorA = $_GET["jogadorA"];
$jogadorP = $_GET["jogadorP"];
$jogadorD = $_GET["jogadorD"];
$jogadorR = $_GET["jogadorR"];
$idTempo = $_GET["idTempo"];

$DadoCO = new DadosController();
$DadoCO->_atualizarDados($jogadorId, $idTempo, $jogadorA, $jogadorP, $jogadorD,
                         $jogadorR,$jogadorGol);
