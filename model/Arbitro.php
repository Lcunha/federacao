<?php
/*
  Name: Arbitro.php
  Description: This is the class that contains the attributes, acessor methods 
  and constructors of a referee. A referee must contains 'idArbitro', 'nome',
  'telefone' and 'cpf'.
 */

class Arbitro
{
	private $idArbitro;
	private $nome;
	private $telefone;
	private $cpf;


	public function __construct(){

	}
	public function __constructOverload($idArbitro,$nome,$telefone,$cpf){
		$this->idArbitro = $idArbitro;
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->cpf = $cpf;
	}
	public function __getIdArbitro(){
		return $this->idArbitro;
	}
	public function __setIdArbitro($idArbitro){
		$this->idArbitro = $idArbitro;
	}
	public function __getNome(){
		return $this->nome;
	}
	public function __setNome($nome){
		$this->nome = $nome;
	}
	public function __getTelefone(){
		return $this->telefone;
	}
	public function __setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function __getCpf(){
		return $this->cpf;
	}
	public function __setCpf($cpf){
		$this->cpf = $cpf;
	}

}
