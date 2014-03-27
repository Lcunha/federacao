<?php
/* 
  Name: Jogo.php
  Description: This is the class that contains the attributes, acessor methods 
  and constructors of the game. The game must contains 'idJogo', 'espectadores', 
  'cidade', 'localizacao', 'data', 'hora', 'duracao and 'total7Metros'. 
 */

class Jogo{
	
	private $idJogo;
	private $espectadores;
	private $cidade;
	private $localizacao;
	private $data;
	private $hora;
	private $duracao;
	private $total7Metros;
	
	public function __construct(){
	
	}
	public function __constructOverload($idJogo,$espectadores,$cidade,$localizacao,$data,$hora,$duracao,$total7Metros){
		$this->idJogo = $idJogo;
		$this->espectadores = $espectadores;
		$this->cidade = $cidade;
		$this->localizacao = $localizacao;
		$this->data = $data;
		$this->hora = $hora;
		$this->duracao = $duracao;
		$this->total7Metros = $total7Metros;
	}
	public function __getIdJogo(){
		return $this->idJogo;
	}
	public function __setIdJogo($idJogo){
		$this->idJogo = $idJogo;
	}
	public function __getEspectadores(){
		return $this->espectadores;
	}
	public function __setEspectadores($espectadores){
		$this->espectadores = $espectadores;
	}
	public function __getCidade(){
		return $this->cidade;
	}
	public function __setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function __getLocalizacao(){
		return $this->localizacao;
	}
	public function __setLocalizacao($localizacao){
		$this->localizacao = $localizacao;
	}
	public function __getData(){
		return $this->data;
	}
	public function __setData($data){
		$this->data = $data;
	}
	public function __getHora(){
		return $this->hora;
	}
	public function __setHora($hora){
		$this->hora = $hora;
	}
	public function __getDuracao(){
		return $this->duracao;
	}
	public function __setDuracao($duracao){
		$this->duracao = $duracao;
	}
	public function __getTotal7Metros(){
		return $this->total7Metros;
	}
	public function __setTotal7Metros($total7Metros){
		$this->total7Metros = $total7Metros;
	}
}