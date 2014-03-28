<?php
/*
    Name: DadosView.php
    Description: This view shows the data added by the user.
*/
include_once(__APP_PATH.'/controller/DadosController.php');

class DadosView{
	private $dadosCO;
        /*
            This function is responsible to instantiate the DadosController.
        */
	public function __construct(){
		$this->dadosCO = new DadosController();
	}
        /*
            This function is responsible to consult the controller data.
        */
	public function consultarPorId($id){
		return $this->dadosCO->_consultarPorId($id);
	}
        /*
            This function is responsible to add to the controller data.
        */
	public function inserir($idTempoInserido,$idTimeA,$idTimeB){
		return $this->dadosCO->_inserir($idTempoInserido,$idTimeA,
                $idTimeB);
	}
        /*
            This function is responsible to update the controller data from the 
            text received by the form.
        */
	public function atualizar($id){
		$formulario = $_POST;
		return $this->dadosCO->_atualizar();
	}
        /*
            This function is responsible to delete the controller data.
        */
	public function excluir($id){
		return $this->dadosCO->_excluir($id);
	}
	
}