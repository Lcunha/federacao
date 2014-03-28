<?php

/*
  Name: JogoView.php
  Description: This view shows the data of each game.
 */
include_once('./controller/JogoController.php');
include_once('./controller/TempoController.php');

class JogoView {

    private $jogoCO;
    private $tempoCO;

    /*
      This function is responsible to instantiate the JogoController and 
      TempoController.
     */
    public function __construct() {
        $this->jogoCO = new JogoController();
        $this->tempoCO = new TempoController();
    }

    /*
      This function is responsible to list all the games.
     */
    public function listarTodos() {
        return $this->jogoCO->_listarTodos();
    }

    /*
      This function is responsible to consult games by the id.
     */
    public function consultarPorId($id) {
        return $this->jogoCO->_consultarPorId($id);
    }

    /*
      This function is responsible to add a new game.
     */
    public function inserir() {
        return $this->jogoCO->_inserir($_POST['espectadores'], $_POST['cidade'],
        $_POST['local'], $_POST['data'], $_POST['hora'], $_POST['duracao'], 0);
    }

    /*
      This function is responsible to save game information received by form.
     */
    public function salvar() {
        return $this->jogoCO->_salvar($_POST['idTimeA'], $_POST['idTimeB'], 
        $_POST['espectadorez'], $_POST['cidade'], $_POST['local'], 
        $_POST['data'], $_POST['hora'], $_POST['duracao']);
    }

    /*
      This function is responsible to delete a game.
     */
    public function excluir($id) {
        return $this->jogoCO->_excluir($id);
    }

    /*
      This function is responsible to add time to a game.
     */
    public function inserirTempo($idJogo) {
        return $this->tempoCO->_inserirTempo($idJogo);
    }

}
