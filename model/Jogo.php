<?php

/* 
    Name: Jogo.php
    Description: This is the class that contains the attributes, accessor methods 
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
	
    /*
        Default construct declaration. Using constructor methods is appropriate for any initialization 
        that the object may need before being used.
    */
    public function __construct(){
	
    }
        
    /*
        Overload construct.
    */
    public function __constructOverload($idJogo, $espectadores, $cidade, $localizacao, $data,
                                        $hora, $duracao, $total7Metros){
	$this->idJogo = $idJogo;
	$this->espectadores = $espectadores;
	$this->cidade = $cidade;
	$this->localizacao = $localizacao;
	$this->data = $data;
	$this->hora = $hora;
	$this->duracao = $duracao;
	$this->total7Metros = $total7Metros;
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
        Method to verify the attribute 'espectadores' of the class.
    */
    public function __getEspectadores(){
	return $this->espectadores;
    }
        
    /*
        Method to modify the attribute 'espectadores' of the class.
    */
    public function __setEspectadores($espectadores){
    	$this->espectadores = $espectadores;
    }
        
    /*
        Method to verify the attribute 'cidade' of the class.
    */
    public function __getCidade(){
	return $this->cidade;
    }
        
    /*
        Method to modify the attribute 'cidade' of the class.
    */
    public function __setCidade($cidade){
	$this->cidade = $cidade;
    }
        
    /*
        Method to verify the attribute 'localizacao' of the class.
    */
    public function __getLocalizacao(){
	return $this->localizacao;
    }
        
    /*
        Method to modify the attribute 'localizacao' of the class.
    */
    public function __setLocalizacao($localizacao){
	$this->localizacao = $localizacao;
    }
        
    /*
        Method to verify the attribute 'data' of the class.
    */
    public function __getData(){
	return $this->data;
    }
        
    /*
        Method to modify the attribute 'data' of the class.
    */
    public function __setData($data){
	$this->data = $data;
    }
        
    /*
        Method to verify the attribute 'hora' of the class.
    */
    public function __getHora(){
	return $this->hora;
    }
        
    /*
        Method to modify the attribute 'hora' of the class.
    */
    public function __setHora($hora){
	$this->hora = $hora;
    }
        
    /*
        Method to verify the attribute 'duracao' of the class.
    */
    public function __getDuracao(){
	return $this->duracao;
    }
        
    /*
        Method to modify the attribute 'duracao' of the class.
    */
    public function __setDuracao($duracao){
	$this->duracao = $duracao;
    }
        
    /*
        Method to verify the attribute 'total7Metros' of the class.
    */
    public function __getTotal7Metros(){
	return $this->total7Metros;
    }
        
    /*
        Method to modify the attribute 'total7Metros' of the class.
    */
    public function __setTotal7Metros($total7Metros){
    	$this->total7Metros = $total7Metros;
    }
}