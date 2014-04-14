<?php

/*
    Name: TecnicoView.php
    Description: This view shows the data of the coach. It can also be used to change or delete it.
*/
include_once (__APP_PATH.'/controller/TecnicoController.php');

class TecnicoView{
	private $tecnicoCO;
        /*
            This function is responsible to instantiate the TecnicoController.
        */ 
	public function __construct(){
		$this->tecnicoCO = new TecnicoController();
	}
        /*
            This function is responsible to save the coach data from the forms.
        */ 
	public function salvar(){
		$formulario = $_POST;
		$this->tecnicoCO->_salvar($formulario['nome'], 
                $formulario['telefone'], $formulario['cpf']);
		echo "Dados inseridos com sucesso";
	}
        /*
            This function is responsible to update de coach data from the forms.
        */ 
	public function atualizar($id){
		$formulario = $_POST;
		return $this->tecnicoCO->_atualizar($id,$formulario['nome'], 
                $formulario['telefone'], $formulario['cpf']);
	}
        /*
            This function is responsible to delete the coach.
        */ 
	public function excluir($id){
		return $this->tecnicoCO->_excluir($id);
	}
        /*
            This function is responsible to list the coachs to the table.
        */ 
	public function listarTecnicosParaTabela(){
		return $this->tecnicoCO->_listarTecnicosParaTabela();
	}
        /*
            This function is responsible to consult coachs by id.
        */ 
	public function consultarPorId($id){
		return $this->tecnicoCO->_consultarPorId($id);
	}
}