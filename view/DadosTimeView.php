<?php
include_once(__APP_PATH.'/controller/DadosTimeController.php');

class DadosTimeView{
	private $dadosTimeCO;

	public function __construct(){
		$this->dadosTimeCO = new DadosTimeController();
	}
	public function listarTodos(){
		return $this->dadosTimeCO->listarTodos();
	}
	public function consultarPorId($id){
		return $this->dadosTimeCO->_consultarPorId($id);
	}
	public function inserir(){
		return $this->dadosTimeCO->_inserir($dadosTime);
	}
	public function atualizar($id){
		$formulario = $_POST;
		return $this->dadosTimeCO->_atualizar();
	}
	public function excluir($id){
		return $this->dadosTimeCO->_excluir($id);
	}
	
}