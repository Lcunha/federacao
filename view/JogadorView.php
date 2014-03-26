<?php
/*
Name: JogadorView.php
Description: This view shows the options of the players.
*/
include_once(__APP_PATH.'/controller/JogadorController.php');
include_once(__APP_PATH.'/controller/TimeController.php');

class JogadorView{
	private $jogadorCO;
	
	public function __construct(){
		$this->jogadorCO = new JogadorController();
	}
	public function salvar(){
		$formulario = $_POST;
		$this->jogadorCO->_salvar($formulario['idTime'],$formulario['nome'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
		echo "Dados inseridos com sucesso";
	}
	public function listarTimesParaSelect(){
		$timeCO = new TimeController();
		return $timeCO->_listarTimesParaSelect();
	}
	public function listarJogadoresParaTabela(){
		return $this->jogadorCO->_listarJogadoresParaTabela();
	}
	public function listarJogadoresParaSumulaTimeA($time,$idTempo){
		return $this->jogadorCO->_listarJogadoresParaSumulaTimeA($time,$idTempo);
	}
	public function listarJogadoresParaSumulaTimeB($time,$idTempo){
		return $this->jogadorCO->_listarJogadoresParaSumulaTimeB($time,$idTempo);
	}
	public function atualizar($id){
		$formulario = $_POST;
		return $this->jogadorCO->_atualizar($id,$formulario['idTime'], $formulario['nome'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
	}
	public function excluir($id){
		return $this->jogadorCO->_excluir($id);
	}
	public function consultarPorId($id){
		return $this->jogadorCO->_consultarPorId($id);
	}
}
