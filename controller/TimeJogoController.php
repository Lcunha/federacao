<?php
/*
  Name:  
  File description:
 
 */

include_once(__APP_PATH.'/persistence/TimeJogoDAO.php');
include_once(__APP_PATH.'/model/TimeJogo.php');
class TimeJogoController{

	private $timeJogoDAO;

	public function __construct(){
		$this->timeJogoDAO = new TimeJogoDAO();
	}
	public function _listarTimeJogoParaTabela(){
		$dadosTimeJogo = new TimeJogo();
		$arrayDadosTimeJogo = $this->timeJogoDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTimeJogo); $i++){
			$dadosTimeJogo = $arrayDadosTimeJogo[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosTimeJogo->__getIdJogo()."</td>
          			<td>".$dadosTimeJogo->__getIdTime()."</td>
          			<td>
            			<a href=\"?pag=timeJogo&action=edit&id=".$dadosTimeJogo->__getTimeJogo()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=timeJogo&action=exclude&id=".$dadosTimeJogo->__getTimeJogo()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->timeJogoDAO->listarTodos();
	}
	public function _consultarPorTime($idTime){
		return $this->timeJogoDAO->consultarPorTime($idTime);
	}
	public function _consultarPorTempo($idTempo){
		return $this->timeJogoDAO->consultarPorTempo($idTempo);
	}
	public function _inserirTimeJogo(TimeJogo $timeJogo){
		return $this->timeJogoDAO->inserir($timeJogo);
	}
	public function _atualizar($idJogo,$idTime){
		$dadosTimeJogo = new TimeJogo();
		$dadosTimeJogo->__constructOverload($idJogo, $idTime);
		$this->timeJogoDAO->atualizar($dadosTimeJogo);
	}
	public function _salvar($idJogoAtual,$idTime){
		$dadosTimeJogo = new TimeJogo();
		$dadosTimeJogo->__constructOverload($idJogoAtual,$idTime);
		$this->timeJogoDAO->inserir($dadosTimeJogo);
	}
	public function _excluir($id){
		return $this->timeJogoDAO->excluir($id);
	}
}
