<?php
require_once('./libs/adodb/adodb.inc.php');

class Conexao{
	
	public $banco;
	private $tipo_banco;
	private $servidor;
	private $usuario;
	private $senha;
	private $db;
	public function __construct(){
		$this->tipo_banco    = "mysql";
		$this->servidor      = "localhost";
		$this->usuario       = "root";
		$this->senha         = "root";
		$this->db            = "federacao_handebol";
		$this->banco = NewADOConnection($this->tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db);
	}
}
