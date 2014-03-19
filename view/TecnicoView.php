<?php
include_once (__APP_PATH.'/controller/TecnicoController.php');

class TecnicoView{
	private $tecnicoCO;
	public function __construct(){
		$this->tecnicoCO = new TecnicoController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->tecnicoCO->_salvar($formulario['nome'], $formulario['telefone'], $formulario['cpf']);
		echo "Dados inseridos com sucesso";
	}
	public function atualizar($id){
		$formulario = $_POST;
		return $this->tecnicoCO->_atualizar($id,$formulario['nome'], $formulario['telefone'], $formulario['cpf']);
	}
	public function excluir($id){
		return $this->tecnicoCO->_excluir($id);
	}
	public function listarTecnicosParaTabela(){
		return $this->tecnicoCO->_listarTecnicosParaTabela();
	}
	public function consultarPorId($id){
		return $this->tecnicoCO->_consultarPorId($id);
	}
}