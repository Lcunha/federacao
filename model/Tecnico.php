<?php

/* 
    Name: Tecnico.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a coach. The coach must contains 'idTecnico', 'nome',
    'telefone' and 'cpf'. 
 */
class Tecnico
{
	private $idTecnico;
	private $nome;
	private $telefone;
	private $cpf;
	
	public function __construct(){
		
	}
	public function __constructOverload($idTecnico,$nome,$telefone,$cpf){
		$this->idTecnico = $idTecnico;
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->cpf = $cpf;
	}
	public function __getIdTecnico(){
		return $this->idTecnico;
	}
	public function __setIdTecnico($idTecnico){
		$this->idTecnico = $idTecnico;
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



