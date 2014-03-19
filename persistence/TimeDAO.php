<?php
include_once ('./model/Time.php');
include_once ('./model/Tecnico.php');
include_once ('./model/Jogador.php');
include_once ('./model/DadosTime.php');
include_once ('./persistence/Conexao.php');


class TimeDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	
	public function listarTodos(){
		$sql = "SELECT * FROM time";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTime = new Time();
			$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE);
			$retornaTime[] = $dadosTime;
		}
		return $retornaTime;
	}
	public function listarTodosJogadores($idTime){
		$sql = "SELECT * FROM jogador WHERE time_id_time = '{$idTime}'";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosJogador = new Jogador();
			$dadosJogador->__constructOverload($registro->ID_JOGADOR,$registro->TIME_ID_TIME,$registro->NOME,$registro->DATA_NASCIMENTO,$registro->CPF,$registro->NUMERO);
			$retornaJogador[] = $dadosJogador;
		}
		return $retornaJogador;
	}
	public function listarTodosPorPontos(){
		$sql = "SELECT t.id_time,dc.pontos,dc.jogos,dc.vitorias,dc.empates,dc.derrotas,dc.gols,dc.gols_levados
				FROM dados_campeonato dc,time t
				WHERE t.id_time = dc.time_id_time
				ORDER BY dc.pontos DESC;";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosTime = new DadosTime();
			$dadosTime->__constructOverload(0,$registro->ID_TIME,$registro->PONTOS,$registro->JOGOS,$registro->VITORIAS,$registro->EMPATES,$registro->DERROTAS,$registro->GOLS,$registro->GOLS_LEVADOS);
			$retornaTime[] = $dadosTime;
		}
		return $retornaTime;
	}
	public function inserir(Time $dadosTime){
		$sql = "INSERT INTO time (tecnico_id_tecnico,nome,categoria,endereco,data_fundacao,presidente,telefone) VALUES ('{$dadosTime->__getIdTecnico()}','{$dadosTime->__getNome()}','{$dadosTime->__getCategoria()}','{$dadosTime->__getEndereco()}','{$dadosTime->__getDataFundacao()}','{$dadosTime->__getPresidente()}','{$dadosTime->__getTelefone()}')";
		$this->conexao->banco->Execute($sql);
		return mysql_insert_id();
	}
	
	public function atualizar(Time $dadosTime){
		$sql = "UPDATE time SET tecnico_id_tecnico='{$dadosTime->__getIdTecnico()}',nome='{$dadosTime->__getNome()}', categoria='{$dadosTime->__getCategoria()}', endereco='{$dadosTime->__getEndereco()}', data_fundacao='{$dadosTime->__getDataFundacao()}', presidente='{$dadosTime->__getPresidente()}', telefone='{$dadosTime->__getTelefone()}' WHERE id_time='{$dadosTime->__getIdTime()}' ";
		$this->conexao->banco->Execute($sql);
		return $dadosTime;
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM time WHERE id_time= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTime = new Time();
		$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE);
		return $dadosTime;
	}
	
	public function consultarPorNome($nome){
		$sql = "SELECT * FROM time WHERE nome= '{$nome}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosTime = new Time();
		$dadosTime->__constructOverload($registro->ID_TIME,$registro->TECNICO_ID_TECNICO,$registro->NOME,$registro->CATEGORIA,$registro->ENDERECO,$registro->DATA_FUNDACAO,$registro->PRESIDENTE,$registro->TELEFONE,$registro->PONTOS);
		return $dadosTime;
	}
	public function excluir($id){
		$sql = "DELETE FROM time WHERE id_time= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
	public function contarRegistrosTime(){
		$sql = "SELECT COUNT(*) as contagem FROM time";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->CONTAGEM;
	}
}
