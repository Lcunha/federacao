<?php
/*
  Name:  
  File description:
 
 */

include_once(__APP_PATH.'/persistence/TecnicoDAO.php');
include_once(__APP_PATH.'/model/Tecnico.php');
class TecnicoController{

	private $tecnicoDAO;

	public function __construct(){
		$this->tecnicoDAO = new TecnicoDAO();
	}

	public function _listarTecnicosParaSelect(){
		$dadosTecnico = new Tecnico();
		$arrayDadosTecnico = $this->tecnicoDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTecnico); $i++){
			$dadosTecnico = $arrayDadosTecnico[$i];
			$arraySelect[] = "<option value=\"".$dadosTecnico->__getIdTecnico()."\">".$dadosTecnico->__getNome()."</option>";
		}
		return $arraySelect;
	}
	public function _listarTecnicosParaTabela(){
		$dadosTecnico = new Tecnico();
		$arrayDadosTecnico = $this->tecnicoDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTecnico); $i++){
			$dadosTecnico = $arrayDadosTecnico[$i];
			$arrayTr[] = " 
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosTecnico->__getIdTecnico()."</td>
          			<td>".$dadosTecnico->__getNome()."</td>
          			<td>".$dadosTecnico->__getTelefone()."</td>
          			<td>".$dadosTecnico->__getCpf()."</td>
          			<td>
            			<a href=\"?pag=tecnico&action=edit&id=".$dadosTecnico->__getIdTecnico()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tecnico&action=exclude&id=".$dadosTecnico->__getIdTecnico()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
public function _consultarPorId($id){
		$dadosTecnico = new Tecnico();
		$dadosTecnico =  $this->tecnicoDAO->consultarPorId($id);
		$arrayDados['nome'] = $dadosTecnico->__getNome();
		$arrayDados['telefone'] = $dadosTecnico->__getTelefone();
		$arrayDados['cpf'] = $dadosTecnico->__getCpf();
		
		return $arrayDados;
	}
	public function _consultarPorNome($nome){
		return $this->tecnicoDAO->consultarPorNome($nome);
	}
	public function _salvar($nome,$telefone,$cpf){
		$dadosTecnico = new Tecnico();
		$dadosTecnico->__constructOverload(0, $nome, $telefone, $cpf);
		$this->tecnicoDAO->inserir($dadosTecnico);
	}
	public function _atualizar($idTecnico,$nome,$telefone,$cpf){
		$dadosTecnico = new Tecnico();
		$dadosTecnico->__constructOverload($idTecnico, $nome, $telefone, $cpf);
		$this->tecnicoDAO->atualizar($dadosTecnico);
	}
	public function _excluir($id){
		return $this->tecnicoDAO->excluir($id);
	}
	public function _contarRegistrosTecnico(){
		return $this->tecnicoDAO->contarRegistrosTecnico();
	}
}
