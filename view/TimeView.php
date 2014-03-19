<?php
include_once (__APP_PATH.'/controller/TimeController.php');
include_once (__APP_PATH.'/controller/TecnicoController.php');
class TimeView{
	private $timeCO;
	
	public function __construct(){
		$this->timeCO = new TimeController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->timeCO->_salvar($formulario['idTecnico'], $formulario['nome'], $formulario['categoria'], $formulario['endereco'], $formulario['dataFundacao'], $formulario['presidente'], $formulario['telefone']);
		echo "Dados inseridos com sucesso";
	}
	public function atualizar($id){
		$formulario = $_POST;
		return $this->timeCO->_atualizar($id,$formulario['idTecnico'], $formulario['nome'], $formulario['categoria'], $formulario['endereco'], $formulario['dataFundacao'], $formulario['presidente'], $formulario['telefone']);
	}
	public function excluir($id){
		return $this->timeCO->_excluir($id);
	}
	public function listarTecnicosPorSelect(){
		$tecnicoCO = new TecnicoController();
		return $tecnicoCO->_listarTecnicosParaSelect();
	}
	public function listarTimeParaTabela(){
		return $this->timeCO->_listarTimeParaTabela();
	}
	public function consultarPorId($id){
		return $this->timeCO->_consultarPorId($id);
	}
}