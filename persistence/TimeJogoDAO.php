<?php
/*
	Name: TimeJogoDAO.php  
	Description:Class data persistence with CRUD functions (create, read, update, delete) 
	for handling the associative type Team_Game, in the relevant table (table associative) in mysql.
 */
include_once (__APP_PATH.'/model/Time.php');
include_once (__APP_PATH.'/model/Jogo.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class TimeJogoDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM time_jogo";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTimeJogo = new TimeJogo();
			$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
			$retornaTimeJogo[] = $dadosTimeJogo;
		}
		return $retornaTimeJogo;
	}
	public function inserir(TimeJogo $dadosTimeJogo){
		$sql = "INSERT INTO jogo_time (jogo_id_jogo,time_id_time) VALUES ('{$dadosTimeJogo->__getIdJogo()}','{$dadosTimeJogo->__getIdTime()}')";
		$this->conexao->banco->Execute($sql);
	}
	public function atualizar(TimeJogo $dadosTimeJogo){
		$sql = "UPDATE jogo_time SET jogo_id_jogo='{$dadosTimeJogo->__getIdJogo()}', time_id_time='{$dadosTimeJogo->__getIdTime()}' ";
		$this->conexao->banco->Execute($sql);
	}
	public function consultarPorTime($idTime){
		$sql = "SELECT * FROM time_jogo WHERE time_id_time= '{$idTime}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTimeJogo = new TimeJogo();
		$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
		return $dadosTimeJogo;
	}
	
	public function consultarPorTempo($idTempo){
			$sql = "SELECT * FROM time_jogo WHERE tempo_id_tempo= '{$idTempo}'";
			$resultado = $this->conexao->banco->Execute($sql);
			$registro = $resultado->FetchNextObject();
			$dadosTimeJogo = new TimeJogo();
			$dadosTimeJogo->__constructOverload($registro->TIME_ID_TIME,$registro->TEMPO_ID_TEMPO);
			return $dadosTimeJogo;
		}
		public function excluir($id){
			$sql = "DELETE FROM jogo_time WHERE jogo_id_jogo= '{$id}' ";
			$resultado = $this->conexao->banco->Execute($sql);
		}
}
