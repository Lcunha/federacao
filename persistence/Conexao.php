<?php

/*
	Name: Conexao.php
	Description: Class to connect to mysql database through ADODB library, 
	t this class contains all the sensitive information from the database
*/

require_once('./libs/adodb/adodb.inc.php');

class Conexao{
	
	public  $banco;
	private $tipo_banco;
	private $servidor;
	private $usuario;
	private $senha;
	private $db;

	/* 
            Construct method in class self, responsible for connection with database mysql 
	*/
	public function __construct(){
		$this->tipo_banco    = "mysql";
		$this->servidor      = "localhost";
		$this->usuario       = "root";
		$this->senha         = "";
		$this->db            = "federacao_handebol";
		$this->banco = NewADOConnection($this->tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		$this->banco->Connect($this->servidor, $this->usuario, $this->senha, $this->db);
	}
}
