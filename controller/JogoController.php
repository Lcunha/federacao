<?php

/*
    Name: JogoController.php
    Description: Inserts the game data in the table can make change,
    delete and query besides enter and save data in the table.
 */
include_once(__APP_PATH . '/persistence/JogoDAO.php');
include_once(__APP_PATH . '/model/Jogo.php');

class JogoController {

    private $jogoDAO;

    public function __construct(){
        $this->jogoDAO = new JogoDAO();
    }

    /*
        Function responsible for listing the data of a game at a table.
    */
    public function _listarJogosParaTabela(){
        $dadosJogo = new Jogo();
        $arrayDadosJogo = $this->jogoDAO->listarTodos();
        for ($i = 0; $i < count($arrayDadosJogo); $i++){
            $dadosJogo = $arrayDadosJogo[$i];
            $arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dadosJogo->__getIdJogo() . "</td>
          			<td>" . $dadosJogo->__getEspectadores() . "</td>
          			<td>" . $dadosJogo->__getCidade() . "</td>
          			<td>" . $dadosJogo->__getLocalizacao() . "</td>
          			<td>" . $dadosJogo->__getDataJogo() . "</td>
					<td>" . $dadosJogo->__getDuracao() . "</td>          			
          			<td>" . $dadosJogo->__getTotal7Metros() . "</td>		
							<td>
            			<a href=\"?pag=jogo&action=edit&id=" . $dadosJogo->__getIdJogo() . "\"><img src=\".
                                    /views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=jogo&action=exclude&id=" . $dadosJogo->__getIdJogo() . "\"><img src=\".
                                    /views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $arrayTr;
    }

    /*
        Function responsible for listing the data of a game.
    */
    public function _listarTodos(){
        return $this->jogoDAO->listarTodos();
    }

    /*
        Function responsible for performing a query by ID.
    */
    public function _consultarPorId($id){
        $dadosJogo = new Jogo();
        $dadosJogo = $this->jogoDAO->consultarPorId($id);
        $arrayDados['espectadores'] = $dadosJogo->__getEspectadores();
        $arrayDados['cidade'] = $dadosJogo->__getCidade();
        $arrayDados['localizacao'] = $dadosJogo->__getLocalizacao();
        $arrayDados['dataJogo'] = $dadosJogo->__getDataJogo();
        $arrayDados['duracao'] = $dadosJogo->__getDuracao();
        $arrayDados['total7Metros'] = $dadosJogo->__getTotal7Metros();

        return $arrayDados;
    }

    /*
        Function responsible for performing a query by date game.
    */
    public function _consultarPorDataJogo($dataJogo){
        return $this->jogoDAO->consultarPorDataJogo($dataJogo);
    }

    /*
        Function responsible for entering data of a game.
    */
    public function _inserir($espectadores, $cidade, $localizacao, $data, $hora, $duracao, $total7Metros){
        $dadosJogo = new Jogo();
        $dadosJogo->__constructOverload(0, $espectadores, $cidade, $localizacao, $data, $hora, $duracao, $total7Metros);
        return $this->jogoDAO->inserir($dadosJogo);
    }

    /*
        Function responsible for updating the data of a game.
    */
    public function _atualizar($idJogo, $espectadores, $cidade, $localizacao, $dataJogo, $duracao){
        $dadosJogo = new Jogo();
        $dadosJogo->__constructOverload($idJogo, $espectadores, $cidade, $localizacao, $dataJogo, $duracao, $total7Metros);
        $this->jogoDAO->atualizar($dadosJogo);
    }

    /*
        Function responsible for saving the data of a new game already registered.
     */
    public function _salvar($idTimeA, $idTimeB, $espectadores, $cidade, $localizacao, $data, $hora, $duracao){
        $dadosJogo = new Jogo();
        $dadosJogo->__constructOverload($idTimeA, $idTimeB, 0, $espectadores, $cidade, $localizacao, $data, $hora, $duracao);
        $this->jogoDAO->inserir($dadosJogo);
    }

    /*
        Function responsible for deleting the data on game.
    */
    public function _excluir($id){
        return $this->jogoDAO->excluir($id);
    }

}