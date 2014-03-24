<?php
/*
  Name:  
  File description:
 
 */

include_once('./persistence/TempoDAO.php');
include_once('./model/Tempo.php');
class TempoController{

	private $tempoDAO;

	public function __construct(){
		$this->tempoDAO = new TempoDAO();
	}

	public function _listarTodos(){
		return $this->tempoDAO->listarTodos();
	}
	public function _listarDadosParaTabela(){
		$dadosTempo = new Tempo();
		$arrayDadosTempo = $this->tempoDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTempo); $i++){
			$dadosTempoTempo = $arrayDadosTempo[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosTempo->__getIdTempo()."</td>
          			<td>".$dadosTempo->__getIdJogo()."</td>
          			<td>".$dadosTempo->__getTiro7Metros()."</td>
          			<td>".$dadosTempo->__getTempoTecnico()."</td>
          			<td>".$dadosTempo->__getPlacarTime1()."</td>
          			<td>".$dadosTempo->__getPlacarTime2()."</td>
          			<td>".$dadosTempo->__getTipo()."</td>
          			<td>
            			<a href=\"?pag=tempo&action=edit&id=".$dadosTempo->__getIdTempo()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tempo&action=exclude&id=".$dadosTempo->__getIdTempo()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
public function _consultarPorId($id){
		$dadosTempo= new Tempo();
		$dadosTempo=  $this->tempoDAO->consultarPorId($id);
		$arrayDados['idTempo'] = $dadosTempo->__getIdTempo();
		$arrayDados['idJogo'] = $dadosTempo->__getIdJogo();
		$arrayDados['tipo'] = $dadosTempo->__getTipo();
		$arrayDados['tiro7Metros'] = $dadosTempo->__getTiro7Metros();
		$arrayDados['tempoTecnico'] = $dadosTempo->__getTempoTecnico();
		$arrayDados['placarTime1'] = $dadosTempo->__getPlacarTime1();
		$arrayDados['placarTime2'] = $dadosTempo->__getPlacarTime2();

		return $arrayDados;
	}
	public function _consultarPorRelatorio($relatorio){
		return $this->tempoDAO->consultarPorRelatorio($relatorio);
	}
	public function _inserirTempo($idJogo){
		return $this->tempoDAO->inserirTempo($idJogo);
	}
	public function _atualizar($idTempo,$idJogo,$tiro7Metros,$tempoTecnico,$placarTime1,$placarTime2,$tipo){
		$dadosTempo = new Tempo();
		$dadosTempo->__constructOverload($idTempo,$idJogo,$tiro7Metros,$tempoTecnico,$placarTime1,$placarTime2,$tipo);
		$this->tempoDAO->atualizar($dadosDados);
	}
	public function _salvar($idTempo,$idJogo,$tiro7Metros,$tempoTecnico,$placarTime1,$placarTime2,$tipo){
		$dadosTempo= new Tempo();
		$dadosTempo->__constructOverload(0,$idJogo,$tiro7Metros,$tempoTecnico,$placarTime1,$placarTime2,$tipo);
		$this->tempoDAO->inserir($dadosTempo);
	}
	public function _excluir($id){
		return $this->tempoDAO->excluir($id);
	}
	public function _inserirGolTimeA($placarA,$seteMetros,$idTempo){
		return $this->tempoDAO->inserirGolTimeA($placarA,$seteMetros,$idTempo);
	}
	public function _inserirGolTimeB($placarB,$idTempoAtual){
		return $this->tempoDAO->inserirGolTimeB($placarB,$idTempoAtual);
	}
	public function _consultarUltimoRegistro(){
		 $resultado = $this->tempoDAO->consultarUltimoRegistro();
		 $idTempo = $resultado->Fields('id');
		 return $idTempo;
	}
}
