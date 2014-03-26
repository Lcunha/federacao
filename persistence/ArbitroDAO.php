<?php
/*
  Name: ArbitroDAO.php  
  Description:Class data persistence with CRUD functions (create, read, update, delete) 
  for handling the type Arbitrator, in the relevant table in mysql.
 */
include_once (__APP_PATH.'/model/Arbitro.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class ArbitroDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = new Conexao();
	}
	public function listarTodos(){
		$sql = "SELECT * FROM arbitro";
		$resultado = $this->conexao->banco->Execute($sql);
		while($registro = $resultado->FetchNextObject()){
			$dadosArbitro = new Arbitro();
			$dadosArbitro->__constructOverload($registro->ID_ARBITRO,$registro->NOME,$registro->TELEFONE,$registro->CPF);
			$retornaArbitros[] = $dadosArbitro;
		}
		return $retornaArbitros;
	}
	
	public function inserir(Arbitro $dadosArbitro){
		$sql = "INSERT INTO arbitro (nome,telefone,cpf) VALUES ('{$dadosArbitro->__getNome()}','{$dadosArbitro->__getTelefone()}','{$dadosArbitro->__getCpf()}')";
		$this->conexao->banco->Execute($sql);
	}
	
	public function atualizar(Arbitro $dadosArbitro){
		$sql = "UPDATE arbitro SET nome='{$dadosArbitro->__getNome()}', telefone='{$dadosArbitro->__getTelefone()}', cpf='{$dadosArbitro->__getCpf()}' WHERE id_arbitro='{$dadosArbitro->__getIdArbitro()}' ";
		$this->conexao->banco->Execute($sql);
	}
	
	public function consultarPorId($id){
		$sql = "SELECT * FROM arbitro WHERE id_arbitro= '{$id}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosArbitro = new Arbitro();
		$dadosArbitro->__constructOverload($registro->ID_ARBITRO,$registro->NOME,$registro->TELEFONE,$registro->CPF);
		return $dadosArbitro;
	}
	
	public function consultarPorNome($nome){
		$sql = "SELECT * FROM arbitro WHERE nome= '{$nome}'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		$dadosDadosTime = new DadosTime();
		$dadosDadosTime->__constructOverload($registro->ID_ARBITRO,$registro->NOME,$registro->CPF);
		return $dadosArbitro;
	}
	public function excluir($id){
		$sql = "DELETE FROM arbitro WHERE id_arbitro= '{$id}' ";
		$resultado = $this->conexao->banco->Execute($sql);
	}
	public function contarRegistrosArbitro(){
		$sql = "SELECT COUNT(*) as contagem FROM arbitro";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		return $registro->CONTAGEM;
	}
}

