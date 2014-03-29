<?php

/* 
    Name: Tempo.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the time, time spends in a game. The time must contains 
    'idTempo', 'idJogo', 'tipo', 'advertencia', 'punicao', 'desqualificacao', 
    'relatorio', 'tiro7Metros', 'tempoTecnico', 'placarTime1' and 'placarTime2'. 
 */
class Tempo{
    private $idTempo;
    private $idJogo;
    private $tipo;
    private $advertencia;
    private $punicao;
    private $desqualificacao;
    private $relatorio;
    private $tiro7Metros;
    private $tempoTecnico;
    private $placarTime1;
    private $placarTime2;
	
/*
    Default construct declaration. Using constructor methods is appropriate for any initialization 
    that the object may need before being used.
*/
    public function __construct(){
	
    }
        
/*
    Overload construct.
*/
    public function __constructOverload($idTempo, $idJogo, $tipo, $tiro7Metros, $tempoTecnico,
                                        $placarTime1, $placarTime2){
	$this->idTempo = $idTempo;
	$this->idJogo = $idJogo;
	$this->tipo = $tipo;
	$this->tiro7Metros = $tiro7Metros;
	$this->tempoTecnico = $tempoTecnico;
	$this->placarTime1 = $placarTime1;
	$this->placarTime2 = $placarTime2;
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
    Method to verify the attribute 'idJogo' of the class.
*/
    public function __getIdJogo(){
	return $this->idJogo;
    }
        
/*
    Method to modify the attribute 'idJogo' of the class.
*/
    public function __setIdJogo($idJogo){
	$this->idJogo = $idJogo;
    }
        
/*
    Method to verify the attribute 'tipo' of the class.
*/
    public function __getTipo(){
	return $this->tipo;
    }
        
/*
    Method to modify the attribute 'tipo' of the class.
*/
    public function __setTipo($tipo){
    	$this->tipo = $tipo;
    }
        
/*
    Method to verify the attribute 'avertencia' of the class.
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
    Method to verify the attribute 'tiro7Metros' of the class.
*/
    public function __getTiro7Metros(){
	return $this->tiro7Metros;
    }
        
/*
    Method to modify the attribute 'tiro7Metros' of the class.
*/
    public function __setTiro7Metros($tiro7Metros){
	$this->tiro7Metros = $tiro7Metros;
    }
        
/*
    Method to verify the attribute 'tempoTecnico' of the class.
*/
    public function __getTempoTecnico(){
    	return $this->tempoTecnico;
    }
        
/*
    Method to modify the attribute 'tempoTecnico' of the class.
*/
    public function __setTempoTecnico($tempoTecnico){
	$this->tempoTecnico = $tempoTecnico;
    }
        
/*
    Method to verify the attribute 'placarTime1' of the class.
*/
    public function __getPlacarTime1(){
	return $this->placarTime1;
    }
        
/*
    Method to modify the attribute 'placarTime1' of the class.
*/
    public function __setPlacarTime1($placarTime1){
	$this->placarTime1 = $placarTime1;
    }
        
/*
    Method to verify the attribute 'placarTime2' of the class.
*/
    public function __getPlacarTime2(){
	return $this->placarTime2;
    }
        
/*
    Method to modify the attribute 'placarTime2' of the class.
*/
    public function __setPlacarTime2($placarTime2){
	$this->placarTime2 = $placarTime2;
    }
}