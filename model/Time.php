<?php

/* 
    Name: Time.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a team. The team must contains 'idTime', 'idTecnico',  
    'nome', 'categoria', 'endereco', 'dataFundacao', 'presidente', 'telefone' and 
    'pontos'. 
 */
class Time{
    private $idTime;
    private $idTecnico;
    private $nome;
    private $categoria;
    private $endereco;
    private $dataFundacao;
    private $presidente;
    private $telefone;
    private $pontos;
	
/*
    Default construct declaration. Using constructor methods is appropriate for any initialization 
    that the object may need before being used.
*/
    public function __construct(){

    }
        
/*
    Overload construct.
*/
    public function __constructOverload($idTime, $idTecnico, $nome, $categoria, $endereco, 
                                        $dataFundacao, $presidente, $telefone){
	$this->idTime = $idTime;
	$this->idTecnico = $idTecnico;
	$this->nome = $nome;
	$this->categoria = $categoria;
	$this->endereco = $endereco;
	$this->dataFundacao = $dataFundacao;
	$this->presidente = $presidente;
	$this->telefone = $telefone;
    }
        
/*
    Method to verify the attribute 'idTime' of the class.
*/
    public function __getIdTime(){
	return $this->idTime;
    }
        
/*
    Method to modify the attribute 'idTime' of the class.
*/
    public function __setIdTime($idTime){
	$this->idTime = $idTime;
    }
        
/*
    Method to verify the attribute 'idTecnico' of the class.
*/
    public function __getIdTecnico(){
	return $this->idTecnico;
    }
        
/*
    Method to modify the attribute 'idTecnico' of the class.
*/
    public function __setIdTecnico($idTecnico){
	$this->idTecnico = $idTecnico;
    }
        
/*
    Method to verify the attribute 'nome' of the class.
*/
    public function __getNome(){
	return $this->nome;
    }
        
/*
    Method to modify the attribute 'nome' of the class.
*/
    public function __setNome($nome){
	$this->nome = $nome;
    }
        
/*
    Method to verify the attribute 'categoria' of the class.
*/
    public function __getCategoria(){
	return $this->categoria;
    }
        
/*
    Method to modify the attribute 'categoria' of the class.
*/
    public function __setCategoria($categoria){
	$this->categoria = $categoria;
    }	
	
/*
    Method to verify the attribute 'endereco' of the class.
*/
    public function __getEndereco(){
    	return $this->endereco;
    }
        
/*
    Method to modify the attribute 'endereco' of the class.
*/
    public function __setEndereco($endereco){
	$this->endereco = $endereco;
    }
        
/*
    Method to verify the attribute 'dataFundacao' of the class.
*/
    public function __getDataFundacao(){
	return $this->dataFundacao;
    }
        
/*
    Method to modify the attribute 'dataFundacao' of the class.
*/
    public function __setDataFundacao($dataFundacao){
	$this->dataFundacao = $dataFundacao;
    }
        
/*
    Method to verify the attribute 'presidente' of the class.
*/
    public function __getPresidente(){
	return $this->presidente;
    }
        
/*
    Method to modify the attribute 'presidente' of the class.
*/
    public function __setPresidente($presidente){
	$this->presidente = $presidente;
    }
        
/*
    Method to verify the attribute 'telefone' of the class.
*/
    public function __getTelefone(){
	return $this->telefone;
    }
        
/*
    Method to modify the attribute 'telefone' of the class.
*/
    public function __setTelefone($telefone){
	$this->telefone = $telefone;
    }
        
/*
    Method to verify the attribute 'pontos' of the class.
*/
    public function __getPontos(){
	return $this->pontos;
    }
        
/*
    Method to modify the attribute 'pontos' of the class.
*/
    public function __setPontos($pontos){
	$this->pontos = $pontos;
    }
}