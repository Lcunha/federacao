<?php

/* 
    Name: Dados.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all game data. The data must contains 'idDados', 
    'idJogador','idTempo' 'advertencia', 'punicao', 'desqualificacao', 
    'relatorio' and 'gol'. 
 */
class Dados{
    private $idDados;
    private $idJogador;
    private $idTempo;
    private $advertencia;
    private $punicao;
    private $desqualificacao;
    private $relatorio;
    private $gol;

/*
    Default construct declaration. Using constructor methods is appropriate for any initialization 
    that the object may need before being used.
*/
    public function __construct(){

    }
        
/*
    Overload construct.
*/
    public function __constructOverload($idDados, $idJogador, $idTempo, $advertencia, $punicao,
                                        $desqualificacao, $relatorio, $gol){
	$this->idDados = $idDados;
    	$this->idJogador = $idJogador;
	$this->idTempo = $idTempo;
	$this->advertencia = $advertencia;
	$this->punicao = $punicao;
	$this->desqualificacao = $desqualificacao;
	$this->relatorio = $relatorio;
	$this->gol = $gol;
    }
        
/*
    Method to verify the attribute 'idDados' of the class.
*/
    public function __getIdDados(){
	return $this->idDados;
    }
        
/*
    Method to modify the attribute 'idDados' of the class.
*/
    public function __setIdDados($idDados){
	$this->idDados = $idDados;
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
    Method to verify the attribute 'idTempo' of the class.
*/
    public function __getIdTempo(){
	return $this->idTempo;
    }
        
/*
    Method to modify the attribute 'idTempo' of the class.
*/
    public function __setIdTempo($idTempo){
	$this->idTempo = $idTempo;
    }
        
/*
    Method to verify the attribute 'advertencia' of the class.
*/
    public function __getAdvertencia(){
	return $this->advertencia;
    }
        
/*
    Method to modify the attribute 'advertencia' of the class.
*/
    public function __setAdvertencia($advertencia){
	$this->advertencia = $advertencia;
    }
        
/*
    Method to verify the attribute 'punicao' of the class.
*/
    public function __getPunicao(){
	return $this->punicao;
    }
        
/*
    Method to modify the attribute 'punicao' of the class.
*/
    public function __setPunicao($punicao){
	$this->punicao = $punicao;
    }
        
/*
    Method to verify the attribute 'desqualificacao' of the class.
*/
    public function __getDesqualificacao(){
	return $this->desqualificacao;
    }
        
/*
    Method to modify the attribute 'desqualificacao' of the class.
*/
    public function __setDesqualificacao($desqualificacao){
	$this->desqualificacao = $desqualificacao;
    }
        
/*
    Method to verify the attribute 'relatorio' of the class.
*/
    public function __getRelatorio(){
	return $this->relatorio;
    }
        
/*
    Method to modify the attribute 'relatorio' of the class.
*/
    public function __setRelatorio($relatorio){
	$this->relatorio = $relatorio;
    }
        
/*
    Method to verify the attribute 'gol' of the class.
*/
    public function __getGol(){
	return $this->gol;
    }
        
/*
    Method to modify the attribute 'gol' of the class.
*/
    public function __setGol($gol){
	$this->gol = $gol;
	}
}