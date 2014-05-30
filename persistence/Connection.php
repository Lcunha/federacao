<?php

/*
    Name: Connection.php
    Description: Class to connect to mysql database through ADODB library, 
    this class contains all the sensitive information from the database
*/

require_once('./libs/adodb/adodb.inc.php');

class Connection{
	
	public  $dataBase;
	private $dataBaseType;
	private $dataBaseServer;
	private $dataBaseUser;
	private $dataBasePass;
	private $dataBaseName;

	/* 
            Construct method in class self, responsible for connection with database mysql 
	*/
	public function __construct(){
            $this->dataBaseType    = "mysql";
            $this->dataBaseServer  = "localhost";
            $this->dataBaseUser    = "root";
            $this->dataBasePass    = "root";
            $this->dataBaseName    = "federacao_handebol";
            $this->dataBase = NewADOConnection($this->dataBaseType);
            $this->dataBase->dialect = 3;
            $this->dataBase->debug = false;
            $this->dataBase->Connect($this->dataBaseServer, $this->dataBaseUser, $this->dataBasePass, $this->dataBaseName);
	}
}
