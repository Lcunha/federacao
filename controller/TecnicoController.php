<?php

/*
  Name: TecnicoController.php
  Description: Class responsible for inserting, deleting,
  changing a manager in addition to making an appointment for a technician already registered.
 */

include_once(__APP_PATH . '/persistence/TecnicoDAO.php');
include_once(__APP_PATH . '/model/Tecnico.php');

class TecnicoController {

    private $tecnicoDAO;

    public function __construct() {
        $this->tecnicoDAO = new TecnicoDAO();
    }

    /*
      Function responsible for selecting the technical data in the table.
     */

    public function _listarTecnicosParaSelect() {
        $dadosTecnico = new Tecnico();
        $arrayDadosTecnico = $this->tecnicoDAO->listarTodos();
        for ($i = 0; $i < count($arrayDadosTecnico); $i++) {
            $dadosTecnico = $arrayDadosTecnico[$i];
            $arraySelect[] = "<option value=\"" . $dadosTecnico->__getIdTecnico() . "\">"
                    . $dadosTecnico->__getNome() . "</option>";
        }
        return $arraySelect;
    }

    /*
      List the function responsible for the technical data in the table.
     */

    public function _listarTecnicosParaTabela() {
        $dadosTecnico = new Tecnico();
        $arrayDadosTecnico = $this->tecnicoDAO->listarTodos();
        for ($i = 0; $i < count($arrayDadosTecnico); $i++) {
            $dadosTecnico = $arrayDadosTecnico[$i];
            $arrayTr[] = " 
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dadosTecnico->__getIdTecnico() . "</td>
          			<td>" . $dadosTecnico->__getNome() . "</td>
          			<td>" . $dadosTecnico->__getTelefone() . "</td>
          			<td>" . $dadosTecnico->__getCpf() . "</td>
          			<td>
            			<a href=\"?pag=tecnico&action=edit&id=" . $dadosTecnico->__getIdTecnico() . "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tecnico&action=exclude&id=" . $dadosTecnico->__getIdTecnico() . "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $arrayTr;
    }

    /*
      Function responsible for performing a query by ID.
     */

    public function _consultarPorId($id) {
        $dadosTecnico = new Tecnico();
        $dadosTecnico = $this->tecnicoDAO->consultarPorId($id);
        $arrayDados['nome'] = $dadosTecnico->__getNome();
        $arrayDados['telefone'] = $dadosTecnico->__getTelefone();
        $arrayDados['cpf'] = $dadosTecnico->__getCpf();

        return $arrayDados;
    }

    /*
      Function responsible for performing a query by name.
     */

    public function _consultarPorNome($nome) {
        return $this->tecnicoDAO->consultarPorNome($nome);
    }

    /*
      Function responsible for saving the data of a new techical already registered.
     */

    public function _salvar($nome, $telefone, $cpf) {
        $dadosTecnico = new Tecnico();
        $dadosTecnico->__constructOverload(0, $nome, $telefone, $cpf);
        $this->tecnicoDAO->inserir($dadosTecnico);
    }

    /*
      Function responsible for updating the data of technical.
     */

    public function _atualizar($idTecnico, $nome, $telefone, $cpf) {
        $dadosTecnico = new Tecnico();
        $dadosTecnico->__constructOverload($idTecnico, $nome, $telefone, $cpf);
        $this->tecnicoDAO->atualizar($dadosTecnico);
    }

    /*
      Function responsible for deleting the data on technical.
     */

    public function _excluir($id) {
        return $this->tecnicoDAO->excluir($id);
    }

    /*
      Function responsible for counting how many records technicians.
     */

    public function _contarRegistrosTecnico() {
        return $this->tecnicoDAO->contarRegistrosTecnico();
    }

}
