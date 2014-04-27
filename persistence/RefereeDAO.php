<?php

/*
    Name: RefereeDAO.php  
    Description: Class data persistence with CRUD functions (create, read, update, delete) 
    for handling the type Arbitrator, in the relevant table in mysql.
 */

include_once (__APP_PATH.'/model/Referee.php');
include_once (__APP_PATH.'/persistence/Connection.php');

class RefereeDAO{
	private $connection;
	
	/* 
            Construct Method of class ArbitratorDAO 
	*/
	public function __construct(){
            $this->connection = new Connection();
	}

	/* 
            That method consultation for listing all arbitrators of table in mysql. 
	*/
	public function listAllReferees(){
            $sql = "SELECT * FROM arbitro";
            $result = $this->connection->banco->Execute($sql);
            while($register = $result->FetchNextObject()){
                    $dadosArbitro = new Arbitro();
                    $dadosArbitro->__constructOverload($register->ID_ARBITRO, 
                                                       $register->NOME, 
                                                       $register->TELEFONE, 
                                                       $register->CPF);
                    $retornaArbitros[] = $dadosArbitro;
            }
            return $retornaArbitros;
	}

	/* 
            Method that is responsible for insertion into table arbitrator in database mysql. 
	*/
	public function inserir(Arbitro $dadosArbitro){
            $sql = "INSERT INTO arbitro (nome, telefone, cpf)
                    VALUES ('{$dadosArbitro->__getNome()}', 
                    '{$dadosArbitro->__getTelefone()}',
                    '{$dadosArbitro->__getCpf()}')";
            $this->connection->banco->Execute($sql);
	}

	/* 
	   Method that responsible for update into table arbitrator to database. 
	*/
	public function atualizar(Arbitro $dadosArbitro){
            $sql = "UPDATE arbitro SET nome ='{$dadosArbitro->__getNome()}',
                           telefone ='{$dadosArbitro->__getTelefone()}', 
                           cpf ='{$dadosArbitro->__getCpf()}'
                    WHERE id_arbitro ='{$dadosArbitro->__getIdArbitro()}' ";
            $this->connection->banco->Execute($sql);
	}

	/* 
            Method is responsible for consult in table arbitrator in database mysql through of ID. 
	*/
	public function consultarPorId($id){
            $sql = "SELECT * FROM arbitro WHERE id_arbitro = '{$id}'";
            $result = $this->connection->banco->Execute($sql);
            $register = $result->FetchNextObject();
            $dadosArbitro = new Arbitro();
            $dadosArbitro->__constructOverload($register->ID_ARBITRO, $register->NOME, 
                                               $register->TELEFONE, $register->CPF);
            return $dadosArbitro;
	}
	
	/* 
            Method is responsible for consult in table arbitrator in database mysql through of NAME. 
	*/
	public function consultarPorNome($nome){
            $sql = "SELECT * FROM arbitro WHERE nome= '{$nome}'";
            $result = $this->connection->banco->Execute($sql);
            $register = $result->FetchNextObject();
            $dadosDadosTime = new DadosTime();
            $dadosDadosTime->__constructOverload($register->ID_ARBITRO, $register->NOME, 
                                                 $register->CPF);
            return $dadosDadosTime;
	}

	/* 
            Method is responsible for exclude in table arbitrator in database mysql through of ID. 
	*/
	public function excluir($id){
            $sql = "DELETE FROM arbitro WHERE id_arbitro= '{$id}' ";
            $result = $this->connection->banco->Execute($sql);
	}

	/* 
            Method is responsible for count of registered in table arbitrator in database. 
	*/
	public function contarRegistrosArbitro(){
            $sql = "SELECT COUNT(*) as contagem FROM arbitro";
            $result = $this->connection->banco->Execute($sql);
            $register = $result->FetchNextObject();
            return $register->CONTAGEM;
	}
}

