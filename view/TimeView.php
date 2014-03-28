<?php

/*
    Name: TimeView.php
    Description: This view shows the data of the teams. It can be used to change
    or delete them too.
*/
include_once (__APP_PATH.'/controller/TimeController.php');
include_once (__APP_PATH.'/controller/TecnicoController.php');
class TimeView{
	private $timeCO;
	/*
            This function is responsible to instantiate the TimeController.
        */ 
	public function __construct(){
		$this->timeCO = new TimeController();
	}
        /*
            This function is responsible to save the team data from de forms.
        */ 
	public function salvar(){
		$formulario = $_POST;
		$this->timeCO->_salvar($formulario['idTecnico'], 
                $formulario['nome'], $formulario['categoria'], 
                $formulario['endereco'], $formulario['dataFundacao'], 
                $formulario['presidente'], $formulario['telefone']);
		echo "Dados inseridos com sucesso";
	}
        /*
            This function is responsible to update the team information from 
            the forms.
        */ 
	public function atualizar($id){
		$formulario = $_POST;
		return $this->timeCO->_atualizar($id, $formulario['idTecnico'], 
                $formulario['nome'], $formulario['categoria'], 
                $formulario['endereco'], $formulario['dataFundacao'],  
                $formulario['presidente'], $formulario['telefone']);
	}
        /*
            This function is responsible to delete a team.
        */ 
	public function excluir($id){
		return $this->timeCO->_excluir($id);
	}
        /*
            This function is responsible to list the coachs by selecting them.
        */ 
	public function listarTecnicosPorSelect(){
		$tecnicoCO = new TecnicoController();
		return $tecnicoCO->_listarTecnicosParaSelect();
	}
        /*
            This function is responsible to list teams to the table.
        */ 
	public function listarTimeParaTabela(){
		return $this->timeCO->_listarTimeParaTabela();
	}
        /*
            This function is responsible to consult teams by id.
        */ 
	public function consultarPorId($id){
		return $this->timeCO->_consultarPorId($id);
	}
}