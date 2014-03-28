<?php
/*
    Name: ArbritoView.php
    Description: View of arbrito.
*/
include_once(__APP_PATH.'/controller/ArbitroController.php');

class ArbitroView{
	private $arbitroCO;
        
        /*
            This function is responsible to instantiate the ArbitroController.
        */
	public function __construct(){
		$this->arbitroCO = new ArbitroController();
	}
        /*
            This function is responsible to get the data typed on the forms and 
            save them.
        */
	public function salvar(){
		$formulario = $_POST;
		$this->arbitroCO->_salvar($formulario['nome'], 
                ['telefone'], $formulario['cpf']);
		echo "Dados inseridos com sucesso";
	}
        /*
            This function is responsible to update the arbitro data.
        */
	public function atualizar($id){
		$formulario = $_POST;
		return $this->arbitroCO->_atualizar($id, $formulario['nome'], 
                $formulario['telefone'], $formulario['cpf']);
	}
        /*
            This function is responsible to delete the arbitro.
        */
	public function excluir($id){
		return $this->arbitroCO->_excluir($id);
	}
        /*
            This function is responsible to list the arbitros in a table.
        */
	public function listarArbitrosParaTabela(){
		return $this->arbitroCO->_listarArbitrosParaTabela();
	}
        /*
            This function is responsible to consult an arbitro by the id.
        */
	public function consultarPorId($id){
		return $this->arbitroCO->_consultarPorId($id);
	}
}