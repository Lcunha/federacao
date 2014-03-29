<?php

/*
	Name: TecnicoDAO.php  
	Description:Class data persistence with CRUD functions (create, read, update, delete) 
	for handling the type Coach, in the relevant table in mysql.
*/

include_once (__APP_PATH.'/model/Tecnico.php');
include_once (__APP_PATH.'/persistence/Conexao.php');

class TecnicoDAO{
	private $conexao;
	
	/*
            The method is responsibility to instance the class.
	*/
	public function __construct(){
            $this->conexao = new Conexao();
	}
	
	/*
            The method is responsibility to list all registers in database table.
	*/
	public function listarTodos(){
            $sql = "SELECT * FROM tecnico";
            $resultado = $this->conexao->banco->Execute($sql);
            while($registro = $resultado->FetchNextObject()){
                    $dadosTecnico = new Tecnico();
                    $dadosTecnico->__constructOverload($registro->ID_TECNICO, $registro->NOME,
                                                       $registro->TELEFONE, $registro->CPF);
                    $retornaTecnico[] = $dadosTecnico;
            }
            return $retornaTecnico;
	}
	
	/*
            The method is responsibility to insert data in database table.
	*/
	public function inserir(Tecnico $dadosTecnico){
            $sql = "INSERT INTO tecnico (nome , telefone, cpf) 
                    VALUES ('{$dadosTecnico->__getNome()}', '{$dadosTecnico->__getTelefone()}',
                            '{$dadosTecnico->__getCpf()}')";
            $this->conexao->banco->Execute($sql);
	}
	
	/*
            The method is responsibility to update data in database table.
	*/
	public function atualizar(Tecnico $dadosTecnico){
            $sql = "UPDATE tecnico 
                    SET nome = '{$dadosTecnico->__getNome()}', 
                        telefone = '{$dadosTecnico->__getTelefone()}', 
                        cpf = '{$dadosTecnico->__getCpf()}' 
                    WHERE id_tecnico = '{$dadosTecnico->__getIdTecnico()}' ";
            $this->conexao->banco->Execute($sql);
            return $dadosTecnico;
	}
	
	/*
            The method is responsibility to consult in database table through of ID.
	*/
	public function consultarPorId($id){
            $sql = "SELECT * FROM tecnico WHERE id_tecnico = '{$id}' ";
            $resultado = $this->conexao->banco->Execute($sql);
            $registro = $resultado->FetchNextObject();
            $dadosTecnico = new Tecnico();
            $dadosTecnico->__constructOverload($registro->ID_TECNICO, $registro->NOME,
                                               $registro->TELEFONE, $registro->CPF);
            return $dadosTecnico;
	}
	
	/*
            The method is responsibility to consult in database table through of Name.
	*/
	public function consultarPorNome($nome){
            $sql = "SELECT * FROM tecnico WHERE nome = '{$nome}'";
            $resultado = $this->conexao->banco->Execute($sql);
            $registro = $resultado->FetchNextObject();
            $dadosTecnico = new Tecnico();
            $dadosTecnico->__constructOverload($registro->ID_TECNICO, $registro->NOME,
                                               $registro->TELEFONE, $registro->CPF);
            return $dadosTecnico;
	}

	/*
            The method is responsibility to delete data in database table.
	*/
	public function excluir($id){
            $sql = "DELETE FROM tecnico WHERE id_tecnico = '{$id}' ";
            $resultado = $this->conexao->banco->Execute($sql);
	}

	/*
            The method is responsibility to count registers of Coach in database table. 
	*/
	public function contarRegistrosTecnico(){
            $sql = "SELECT COUNT(*) as contagem FROM tecnico";
            $resultado = $this->conexao->banco->Execute($sql);
            $registro = $resultado->FetchNextObject();
            return $registro->CONTAGEM;
	}
}
