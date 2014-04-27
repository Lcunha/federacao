<?php

/*
    Name: Arbitro.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a referee. A referee must contains 'idArbitro', 'nome',
    'telefone' and 'cpf'.
*/
class Arbitro{
    private $idArbitro;
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
    public function __constructOverload($idArbitro, $nome, $telefone, $cpf){
	$this->idArbitro = $idArbitro;
	$this->nome = $nome;
	$this->telefone = $telefone;
	$this->cpf = $cpf;
    }
        
    /*
        Method to verify the attribute 'idAtributo' of the class.
    */
    public function __getIdArbitro(){
    	return $this->idArbitro;
    }

    /*
       Method to modify the attribute 'idAtributo' of the class.
    */
    public function __setIdArbitro($idArbitro){
	$this->idArbitro = $idArbitro;
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
