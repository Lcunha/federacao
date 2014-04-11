<?php

/* 
    Name: Jogador.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of a player. The player must contains 'idJogador', 'idTime', 
    'nome', 'dataNascimento', 'cpf' and 'numero'. 
*/
class Jogador{
    private $idJogador;
    private $idTime;
    private $nome;
    private $dataNascimento;
    private $cpf;
    private $numero;
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
		
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idJogador, $idTime, $nome, $dataNascimento, $cpf, 
                                        $numero){
    	$this->idJogador = $idJogador;
	$this->idTime = $idTime;
	$this->nome = $nome;
	$this->dataNascimento = $dataNascimento;
	$this->cpf = $cpf;
	$this->numero = $numero;
    }
        
    /*
        Method to verify the attribute 'idJogador' of the class.
    */
    public function __getIdJogador(){
	return $this->idJogador;
    }
        
    /*
        Method to modify the attribute 'idJogador' of the class.
    */
    public function __setIdJogador($idJogador){
	$this->idJogador = $idJogador;
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
        Method to verify the attribute 'dataNascimento' of the class.
    */
    public function __getDataNascimento(){
	return $this->dataNascimento;
    }
        
    /*
        Method to modify the attribute 'dataNascimento' of the class.
    */
    public function __setDataNascimento($dataNascimento){
	$this->dataNascimento = $dataNascimento;
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
        Method to verify the attribute 'numero' of the class.
    */
    public function __getNumero(){
	return $this->numero;
    }
        
    /*
        Method to modify the attribute 'numero' of the class.
    */
    public function __setNumero($numero){
	$this->numero = $numero;
    }
}

