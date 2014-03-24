<?php
/*
  Name:  
  Description:
 
 */


include_once(__APP_PATH.'/persistence/ArbitroDAO.php');
include_once(__APP_PATH.'/model/Arbitro.php');
class ArbitroController{
	
	private $arbitroDAO;
	
	public function __construct(){
		$this->arbitroDAO = new ArbitroDAO();
	}
	public function _listarArbitrosParaTabela(){
		$dadosArbitro = new Arbitro();
		$arrayDadosArbitro = $this->arbitroDAO->listarTodos();
		for($i=0;$i<count($arrayDadosArbitro); $i++){
			$dadosArbitro = $arrayDadosArbitro[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosArbitro->__getIdArbitro()."</td>
          			<td>".$dadosArbitro->__getNome()."</td>
          			<td>".$dadosArbitro->__getTelefone()."</td>
          			<td>".$dadosArbitro->__getCpf()."</td>
          			<td>
            			<a href=\"?pag=arbitro&action=edit&id=".$dadosArbitro->__getIdArbitro()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=arbitro&action=exclude&id=".$dadosArbitro->__getIdArbitro()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->arbitroDAO->listarTodos();
	}
	public function _consultarPorId($id){
		$dadosArbitro = new Arbitro();
		$dadosArbitro =  $this->arbitroDAO->consultarPorId($id);
		$arrayDados['nome'] = $dadosArbitro->__getNome();
		$arrayDados['telefone'] = $dadosArbitro->__getTelefone();
		$arrayDados['cpf'] = $dadosArbitro->__getCpf();
		
		return $arrayDados;
	}
	public function _consultarPorNome($nome){
		return $this->arbitroDAO->consultarPorNome($nome);
	}
	public function _inserir(Arbitro $arbitro){
		return $this->arbitroDAO->inserir($arbitro);
	}
	public function _atualizar($idArbitro,$nome,$telefone,$cpf){
		$dadosArbitro = new Arbitro();
		$dadosArbitro->__constructOverload($idArbitro, $nome, $telefone, $cpf);
		$this->arbitroDAO->atualizar($dadosArbitro);
	}
	public function _salvar($nome, $telefone,$cpf){
		$dadosArbitro = new Arbitro();
		$dadosArbitro->__constructOverload(0, $nome, $telefone, $cpf);
		$this->arbitroDAO->inserir($dadosArbitro);
	}
	public function _excluir($id){
		return $this->arbitroDAO->excluir($id);
	}
	public function _contarRegistrosArbitro(){
		return $this->arbitroDAO->contarRegistrosArbitro();
	}
}