<?php
include_once (__APP_PATH.'/model/Jogo.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class JogoDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM jogo";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosJogo = new Jogo();
			$dadosJogo->__constructOverload($registro->ID_JOGO,$registro->ESPECTADORES,$registro->CIDADE,$registro->LOCALIZACAO,$registro->DATA_JOGO,$registro->HORA_JOGO,$registro->DURACAO,$registro->TOTAL_7METROS);
			$retornaJogo[] = $dadosJogo;
		}
		return $retornaJogo;
	}
	
	public function inserir(Jogo $dadosJogo){
		$sql = "INSERT INTO jogo (espectadores,cidade,localizacao,duracao,data_jogo,hora_jogo,total_7Metros) VALUES ('{$dadosJogo->__getEspectadores()}','{$dadosJogo->__getCidade()}','{$dadosJogo->__getLocalizacao()}','{$dadosJogo->__getDuracao()}','{$dadosJogo->__getData()}','{$dadosJogo->__getHora()}','{$dadosJogo->__getTotal7Metros()}')";
		$this->conexao->banco->Execute($sql);
		//$id = $banco->insert_Id();
		//return $id;
	}
	
	public function atualizar(Jogo $dadosJogo){
		$sql = "UPDATE jogo SET espectadores='{$dadosJogo->__getEspectadores()}',cidade='{$dadosJogo->__getCidade()}', localizacao='{$dadosJogo->__getLocalizacao()}', data_jogo='{$dadosJogo->__getDataJogo()}', duracao='{$dadosJogo->__getDuracao()}' WHERE id_jogo='{$dadosJogo->__getIdJogo()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosJogo;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM jogo WHERE id_jogo= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosJogo = new Jogo();
		$dadosJogo->__constructOverload($registro->ID_JOGO,$registro->ESPECTADORES,$registro->CIDADE,$registro->LOCALIZACAO,$registro->DATA_JOGO,$registro->DURACAO,$registro->TOTAL_7METROS);
		return $dadosJogo;
	}
	
	public function consultarPorDataJogo($dataJogo){
		$sql = "SELECT * FROM jogo WHERE data_jogo= '{$dataJogo}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosJogo = new Jogo();
		$dadosJogo->__constructOverload($registro->ID_JOGO,$registro->ESPECTADORES,$registro->CIDADE,$registro->LOCALIZACAO,$registro->DATA_JOGO,$registro->DURACAO,$registro->TOTAL_7METROS);
		return $dadosJogo;
	}
	public function excluir($id){
		$sql = "DELETE FROM arbitro WHERE id_arbitro= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
}
