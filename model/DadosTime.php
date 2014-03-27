<?php
/* 
  Name: DadosTime.php
  Description: This is the class that contains the attributes, acessor methods 
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
	
	public function __construct(){
	
	}
	public function __constructOverload($idDadosTime,$idTime,$pontos,$jogos,$vitorias,$empates,$derrotas,$gols,$golsLevados){
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
	public function __getIdDadosTime(){
		return $this->idDadosTime;
	}
	public function __setIdDadosTime($idDadosTime){
		$this->idDadosTime = $idDadosTime;
	}
	public function __getIdTime(){
		return $this->idTime;
	}
	public function __setIdTime($idTime){
		$this->idTime = $idTime;
	}
	public function __getPontos(){
		return $this->pontos;
	}
	public function __setPontos($pontos){
		$this->pontos = $pontos;
	}
	public function __getJogos(){
		return $this->jogos;
	}
	public function __setJogos($jogos){
		$this->jogos = $jogos;
	}
	public function __getVitorias(){
		return $this->vitorias;
	}
	public function __setVitorias($vitorias){
		$this->vitorias = $vitorias;
	}
	public function __getEmpates(){
		return $this->empates;
	}
	public function __setEmpates($empates){
		$this->empates = $empates;
	}
	public function __getDerrotas(){
		return $this->derrotas;
	}
	public function __setDerrotas($derrotas){
		$this->derrotas = $derrotas;
	}
	public function __getGols(){
		return $this->gols;
	}
	public function __setGols($gols){
		$this->gols = $gols;
	}
	public function __getGolsLevados(){
		return $this->golsLevados;
	}
	public function __setGolsLevados($golsLevados){
		$this->golsLevados = $golsLevados;
	}
}