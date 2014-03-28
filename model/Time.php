<?php

/* 
    Name: Time.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a team. The team must contains 'idTime', 'idTecnico',  
    'nome', 'categoria', 'endereco', 'dataFundacao', 'presidente', 'telefone' and 
    'pontos'. 
 */
class Time
{
	private $idTime;
	private $idTecnico;
	private $nome;
	private $categoria;
	private $endereco;
	private $dataFundacao;
	private $presidente;
	private $telefone;
	private $pontos;
	

	public function __construct(){

	}
	public function __constructOverload($idTime,$idTecnico,$nome,$categoria,$endereco,$dataFundacao,$presidente,$telefone){
		$this->idTime = $idTime;
		$this->idTecnico = $idTecnico;
		$this->nome = $nome;
		$this->categoria = $categoria;
		$this->endereco = $endereco;
		$this->dataFundacao = $dataFundacao;
		$this->presidente = $presidente;
		$this->telefone = $telefone;
	}
	public function __getIdTime(){
		return $this->idTime;
	}
	public function __setIdTime($idTime){
		$this->idTime = $idTime;
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
	public function __getCategoria(){
		return $this->categoria;
	}
	public function __setCategoria($categoria){
		$this->categoria = $categoria;
	}	
	
	public function __getEndereco(){
		return $this->endereco;
	}
	public function __setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function __getDataFundacao(){
		return $this->dataFundacao;
	}
	public function __setDataFundacao($dataFundacao){
		$this->dataFundacao = $dataFundacao;
	}
	public function __getPresidente(){
		return $this->presidente;
	}
	public function __setPresidente($presidente){
		$this->presidente = $presidente;
	}
	public function __getTelefone(){
		return $this->telefone;
	}
	public function __setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function __getPontos(){
		return $this->pontos;
	}
	public function __setPontos($pontos){
		$this->pontos = $pontos;
	}

}



