<?php
/* Name: Dados.php
   Description: This is the class that contains the attributes, acessor methods 
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


	public function __construct(){

	}
	public function __constructOverload($idDados,$idJogador,$idTempo,$advertencia,$punicao,$desqualificacao,$relatorio,$gol){
		$this->idDados = $idDados;
		$this->idJogador = $idJogador;
		$this->idTempo = $idTempo;
		$this->advertencia = $advertencia;
		$this->punicao = $punicao;
		$this->desqualificacao = $desqualificacao;
		$this->relatorio = $relatorio;
		$this->gol = $gol;
	}
	public function __getIdDados(){
		return $this->idDados;
	}
	public function __setIdDados($idDados){
		$this->idDados= $idDados;
	}
	public function __getIdJogador(){
		return $this->idJogador;
	}
	public function __setIdJogador($idJogador){
		$this->idJogador= $idJogador;
	}
	public function __getIdTempo(){
		return $this->idTempo;
	}
	public function __setIdTempo($idTempo){
		$this->idTempo= $idTempo;
	}
	public function __getAdvertencia(){
		return $this->advertencia;
	}
	public function __setAdvertencia($advertencia){
		$this->advertencia= $advertencia;
	}
	public function __getPunicao(){
		return $this->punicao;
	}
	public function __setPunicao($punicao){
		$this->punicao= $punicao;
	}
	public function __getDesqualificacao(){
		return $this->desqualificacao;
	}
	public function __setDesqualificacao($desqualificacao){
		$this->desqualificacao= $desqualificacao;
	}
	public function __getRelatorio(){
		return $this->relatorio;
	}
	public function __setRelatorio($relatorio){
		$this->relatorio= $relatorio;
	}
	public function __getGol(){
		return $this->gol;
	}
	public function __setGol($gol){
		$this->gol= $gol;
	}
}
	
	
