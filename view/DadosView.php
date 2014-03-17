<?php
include_once(__APP_PATH.'/controller/DadosController.php');

class DadosView{
	private $dadosCO;

	public function __construct(){
		$this->dadosCO = new DadosController();
	}
	public function consultarPorId($id){
		return $this->dadosCO->_consultarPorId($id);
	}
	public function inserir($idTempoInserido,$idTimeA,$idTimeB){
		return $this->dadosCO->_inserir($idTempoInserido,$idTimeA,$idTimeB);
	}
	public function atualizar($id){
		$formulario = $_POST;
		return $this->dadosCO->_atualizar();
	}
	public function excluir($id){
		return $this->dadosCO->_excluir($id);
	}
	
}