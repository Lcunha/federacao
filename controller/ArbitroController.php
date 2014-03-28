<?php

/*
  Name: ArbitroController.php
  Description:Class that performs the listing of teams and games
  already registered in the system in a table may exluir, edit, update and save.
 */

include_once(__APP_PATH . '/persistence/ArbitroDAO.php');
include_once(__APP_PATH . '/model/Arbitro.php');

class ArbitroController {

    private $arbitroDAO;

    public function __construct() {
        $this->arbitroDAO = new ArbitroDAO();
    }

    /*
      Function responsible for taking the data registered by the referee system 
      and store the information in a vector.
     */

    public function _listarArbitrosParaTabela() {
        $dadosArbitro = new Arbitro();
        $arrayDadosArbitro = $this->arbitroDAO->listarTodos();
        for ($i = 0; $i < count($arrayDadosArbitro); $i++) {
            $dadosArbitro = $arrayDadosArbitro[$i];
            $arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dadosArbitro->__getIdArbitro() . "</td>
          			<td>" . $dadosArbitro->__getNome() . "</td>
          			<td>" . $dadosArbitro->__getTelefone() . "</td>
          			<td>" . $dadosArbitro->__getCpf() . "</td>
          			<td>
            			<a href=\"?pag=arbitro&action=edit&id=" . $dadosArbitro->__getIdArbitro() . "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=arbitro&action=exclude&id=" . $dadosArbitro->__getIdArbitro() . "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $arrayTr;
    }

    /*
      Responsible function to list all registered referees
     */

    public function _listarTodos() {
        return $this->arbitroDAO->listarTodos();
    }

    /*
      Responsible for querying the data of a referee from the id function 
      entered by User
     */

    public function _consultarPorId($id) {
        $dadosArbitro = new Arbitro();
        $dadosArbitro = $this->arbitroDAO->consultarPorId($id);
        $arrayDados['nome'] = $dadosArbitro->__getNome();
        $arrayDados['telefone'] = $dadosArbitro->__getTelefone();
        $arrayDados['cpf'] = $dadosArbitro->__getCpf();

        return $arrayDados;
    }

    /*
      Function responsible for performing a query by name.
     */

    public function _consultarPorNome($nome) {
        return $this->arbitroDAO->consultarPorNome($nome);
    }

    /*
      Responsible for calling the function of insertion of a new
      arbitrator in the table by calling the function insert function in 
      existing class ArbitroDAO.php
     */

    public function _inserir(Arbitro $arbitro) {
        return $this->arbitroDAO->inserir($arbitro);
    }

    /*
      Responsible function to modify data already a registered referee.
     */

    public function _atualizar($idArbitro, $nome, $telefone, $cpf) {
        $dadosArbitro = new Arbitro();
        $dadosArbitro->__constructOverload($idArbitro, $nome, $telefone, $cpf);
        $this->arbitroDAO->atualizar($dadosArbitro);
    }

    /*
      Function responsible for saving the data of a new arbitrator already 
      registered.
     */

    public function _salvar($nome, $telefone, $cpf) {
        $dadosArbitro = new Arbitro();
        $dadosArbitro->__constructOverload(0, $nome, $telefone, $cpf);
        $this->arbitroDAO->inserir($dadosArbitro);
    }

    /*
      Responsible function to delete data from an already registered referee.
     */

    public function _excluir($id) {
        return $this->arbitroDAO->excluir($id);
    }

    /*
      Function responsible for telling how many arbitrators have already been 
      registered.
     */

    public function _contarRegistrosArbitro() {
        return $this->arbitroDAO->contarRegistrosArbitro();
    }

}