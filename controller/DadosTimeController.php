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
        $dadosDadosTime = new DadosTime();
        $dadosDadosTime = $this->dadosTimeDAO->consultarPorId($id);
        //$arrayDados['nome'] = $dadosArbitro->__getNome();
        //$arrayDados['telefone'] = $dadosArbitro->__getTelefone();
        //$arrayDados['cpf'] = $dadosArbitro->__getCpf();

        return $arrayDados;
    }

    /*
        Function responsible for entering data of a team.
     */
    public function _inserir(DadosTime $dadosTime){
        return $this->dadosTimeDAO->inserir($dadosTime);
    }

    /*
        Responsible for updating the data team.
     */
    public function _atualizar($idDadosTime, $pontos, $jogos, $vitorias, $empates, $derrotas, $gols, $golsLevados){
        $dadosDadosTime = new DadosTime();
        $dadosDadosTime->__constructOverload(0, $idDadosTime, $pontos, $jogos, $vitorias, 
                                             $empates, $derrotas, $gols, $golsLevados);
        $this->dadosTimeDAO->atualizar($dadosDadosTime);
    }

    /*
        Responsible for updating the scores of times in matches.
     */
    public function _atualizarPontos($idTimeA, $idTimeB, $golsTimeA, $golsTimeB) {
        if ($golsTimeA > $golsTimeB) {
            $pontuacaoA = 3;
            $pontuacaoB = 0;
        } else if ($golsTimeA < $golsTimeB) {
            $pontuacaoA = 0;
            $pontuacaoB = 3;
        } else if ($golsTimeA == $golsTimeB) {
            $pontuacaoA = 1;
            $pontuacaoB = 1;
        }
        $this->dadosTimeDAO->atualizarPontos($idTimeA, $idTimeB, $pontuacaoA, $pontuacaoB, $golsTimeA, $golsTimeB);
    }

    /*
        Function responsible for deleting the data on time.
     */
    public function _excluir($id) {
        return $this->dadosTimeDAO->excluir($id);
    }

}
