<?php

/* 
    Name: DadosTime.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors about all team data. The team data must contains 
    'idDadosTime', 'idTime', 'pontos', 'jogos', 'vitorias', 'empates', 'derrotas',
    'gols' and 'golsLevados'. 
 */
class DadosTime{
    private $idDadosTime;
    private $idTime;
    private $pontos;
    private $jogos;
    private $vitorias;
    private $empates;
    private $derrotas;
    private $gols;
    private $golsLevados;
	
/*
    Default construct declaration. Using constructor methods is appropriate for any initialization 
    that the object may need before being used.
*/
    public function __construct(){
	
    }
        
/*
    Overload construct.
*/
    public function __constructOverload($idDadosTime, $idTime, $pontos, $jogos, $vitorias,
                                        $empates, $derrotas, $gols, $golsLevados){
	$this->idDadosTime = $idDadosTime;
	$this->idTime = $idTime;
	$this->pontos = $pontos;
	$this->jogos = $jogos;
	$this->vitorias = $vitorias;
	$this->empates = $empates;
	$this->derrotas = $derrotas;
	$this->gols = $gols;
	$this->golsLevados = $golsLevados;
    }
        
/*
    Method to verify the attribute 'idDadosTime' of the class.
*/
    public function __getIdDadosTime(){
	return $this->idDadosTime;
    }
        
/*
    Method to modify the attribute 'idDadosTime' of the class.
*/
    public function __setIdDadosTime($idDadosTime){
    	$this->idDadosTime = $idDadosTime;
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
        
/*
    Method to verify the attribute 'jogos' of the class.
*/
    public function __getJogos(){
	return $this->jogos;
    }
       
/*
    Method to modify the attribute 'jogos' of the class.
*/
    public function __setJogos($jogos){
    	$this->jogos = $jogos;
    }
        
/*
    Method to verify the attribute 'vitorias' of the class.
*/
    public function __getVitorias(){
	return $this->vitorias;
	}
        
/*
    Method to modify the attribute 'vitorias' of the class.
*/
    public function __setVitorias($vitorias){
    	$this->vitorias = $vitorias;
    }
        
/*
    Method to verify the attribute 'empates' of the class.
*/
    public function __getEmpates(){
    	return $this->empates;
    }
        
/*
    Method to modify the attribute 'empates' of the class.
*/
    public function __setEmpates($empates){
	$this->empates = $empates;
    }
        
/*
    Method to verify the attribute 'derrotas' of the class.
*/
    public function __getDerrotas(){
	return $this->derrotas;
    }
        
/*
    Method to modify the attribute 'derrotas' of the class.
*/
    public function __setDerrotas($derrotas){
	$this->derrotas = $derrotas;
    }
        
/*
    Method to verify the attribute 'gols' of the class.
*/
    public function __getGols(){
	return $this->gols;
    }
        
/*
    Method to modify the attribute 'gols' of the class.
*/
    public function __setGols($gols){
    	$this->gols = $gols;
    }
        
/*
    Method to verify the attribute 'golsLevados' of the class.
*/
    public function __getGolsLevados(){
	return $this->golsLevados;
    }
        
/*
    Method to modify the attribute 'golsLevados' of the class.
*/
    public function __setGolsLevados($golsLevados){
	$this->golsLevados = $golsLevados;
    }
}