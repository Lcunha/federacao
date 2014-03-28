<?php
/*
Name: DadosTimeView.php
Description: This view shows the data of each team.
*/
include_once(__APP_PATH.'/controller/DadosTimeController.php');

class DadosTimeView{
	private $dadosTimeCO;
        /*
            This function is responsible to instantiate the DadosTimeController.
        */
	public function __construct(){
		$this->dadosTimeCO = new DadosTimeController();
	}
	/*
            This function is responsible to list all the data of the Team.
        */
        public function listarTodos(){
		return $this->dadosTimeCO->listarTodos();
	}
	/*
            This function is responsible to consult the data of the team by the id.
        */
        public function consultarPorId($id){
		return $this->dadosTimeCO->_consultarPorId($id);
	}
	/*
            This function is responsible to add team data.
        */
        public function inserir(){
		return $this->dadosTimeCO->_inserir($dadosTime);
	}
	/*
            This function is responsible to update team data.
        */
        public function atualizar($id){
		$formulario = $_POST;
		return $this->dadosTimeCO->_atualizar();
	}
	/*
            This function is responsible to delete team data.
        */
        public function excluir($id){
		return $this->dadosTimeCO->_excluir($id);
	}
	
}