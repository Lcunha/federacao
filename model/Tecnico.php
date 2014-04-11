<?php

/* 
    Name: Tecnico.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a coach. The coach must contains 'idTecnico', 'nome',
    'telefone' and 'cpf'. 
*/
class Tecnico{
    private $idTecnico;
    private $nome;
    private $telefone;
    private $cpf;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
		
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idTecnico, $nome, $telefone, $cpf){
    	$this->idTecnico = $idTecnico;
	$this->nome = $nome;
	$this->telefone = $telefone;
	$this->cpf = $cpf;
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
        Method to verify the attribute 'cpf' of the class.
    */
    public function __getCpf(){
	return $this->cpf;
    }
        
    /*
        Method to modify the attribute 'cpf' of the class.
    */
    public function __setCpf($cpf){
	$this->cpf = $cpf;
    }
}