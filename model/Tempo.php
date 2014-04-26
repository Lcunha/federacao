<?php

/* 
    Name: Tempo.php
    Description: This is the class that contains the attributes, accessor methods 
    and constructors of the time, time spends in a game. The time must contains 
    'idTimePlay', 'idPlayer', 'type', 'warning', 'warning', 'desqualificacao', 
    'relatorio', 'tiro7Metros', 'tempoTecnico', 'placarTime1' and 'placarTime2'. 
*/
class Tempo{
    private $idTimePlay;
    private $idPlayer;
    private $type;
    private $warning;
    private $warning;
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
    public function __constructOverload($idTimePlay, $idPlayer, $type, $tiro7Metros, $tempoTecnico,
                                        $placarTime1, $placarTime2){
	$this->idTimePlay = $idTimePlay;
	$this->idPlayer = $idPlayer;
	$this->type = $type;
	$this->tiro7Metros = $tiro7Metros;
	$this->tempoTecnico = $tempoTecnico;
	$this->placarTime1 = $placarTime1;
	$this->placarTime2 = $placarTime2;
    }
        
    /*
        Method to verify the attribute 'idTimePlay' of the class.
    */
    public function __getIdTimePlay(){
	return $this->idTimePlay;
    }
        
    /*
        Method to modify the attribute 'idTimePlay' of the class.
    */
    public function __setIdTimePlay($idTimePlay){
	$this->idTimePlay = $idTimePlay;
    }
        
    /*
        Method to verify the attribute 'idPlayer' of the class.
    */
    public function __getIdPlayer(){
	return $this->idPlayer;
    }
        
    /*
        Method to modify the attribute 'idPlayer' of the class.
    */
    public function __setIdPlayer($idPlayer){
	$this->idPlayer = $idPlayer;
    }
        
    /*
        Method to verify the attribute 'type' of the class.
    */
    public function __getType(){
	return $this->type;
    }
        
    /*
        Method to modify the attribute 'type' of the class.
    */
    public function __setType($type){
    	$this->type = $type;
    }
        
    /*
        Method to verify the attribute 'avertencia' of the class.
    */
    public function __getAdvertencia(){
	return $this->warning;
    }
        
    /*
        Method to modify the attribute 'warning' of the class.
    */
    public function __setAdvertencia($warning){
	$this->warning = $warning;
    }
        
    /*
        Method to verify the attribute 'warning' of the class.
    */
    public function __getPunicao(){
	return $this->warning;
    }
        
    /*
        Method to modify the attribute 'warning' of the class.
    */
    public function __setPunicao($warning){
	$this->warning = $warning;
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