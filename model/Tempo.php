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
	
	public function __construct(){
	
	}
	public function __constructOverload($idTempo,$idJogo,$tipo,$tiro7Metros,$tempoTecnico,$placarTime1,$placarTime2){
		$this->idTempo = $idTempo;
		$this->idJogo = $idJogo;
		$this->tipo = $tipo;
		$this->tiro7Metros = $tiro7Metros;
		$this->tempoTecnico = $tempoTecnico;
		$this->placarTime1 = $placarTime1;
		$this->placarTime2 = $placarTime2;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdTempo($idTempo){
		$this->idTempo = $idTempo;
	}
	public function __getIdJogo(){
		return $this->idJogo;
	}
	public function __setIdJogo($idJogo){
		$this->idJogo = $idJogo;
	}
	public function __getTipo(){
		return $this->tipo;
	}
	public function __setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function __getAdvertencia(){
		return $this->advertencia;
	}
	public function __setAdvertencia($advertencia){
		$this->advertencia = $advertencia;
	}
	public function __getPunicao(){
		return $this->punicao;
	}
	public function __setPunicao($punicao){
		$this->punicao = $punicao;
	}
	public function __getDesqualificacao(){
		return $this->desqualificacao;
	}
	public function __setDesqualificacao($desqualificacao){
		$this->desqualificacao = $desqualificacao;
	}
	public function __getRelatorio(){
		return $this->relatorio;
	}
	public function __setRelatorio($relatorio){
		$this->relatorio = $relatorio;
	}
	public function __getTiro7Metros(){
		return $this->tiro7Metros;
	}
	public function __setTiro7Metros($tiro7Metros){
		$this->tiro7Metros = $tiro7Metros;
	}
	public function __getTempoTecnico(){
		return $this->tempoTecnico;
	}
	public function __setTempoTecnico($tempoTecnico){
		$this->tempoTecnico = $tempoTecnico;
	}
	public function __getPlacarTime1(){
		return $this->placarTime1;
	}
	public function __setPlacarTime1($placarTime1){
		$this->placarTime1 = $placarTime1;
	}
	public function __getPlacarTime2(){
		return $this->placarTime2;
	}
	public function __setPlacarTime2($placarTime2){
		$this->placarTime2 = $placarTime2;
	}
}