<?php
/*
    Name: JogadorView.php
    Description: This view shows the options of the players.
*/
include_once(__APP_PATH.'/controller/JogadorController.php');
include_once(__APP_PATH.'/controller/TimeController.php');

class JogadorView{
	private $jogadorCO;
        /*
            This function is responsible to instantiate the JogadorController.
        */	
	public function __construct(){
		$this->jogadorCO = new JogadorController();
	}
        /*
            This function is responsible to save the player date received by form.
        */
	public function salvar(){
		$formulario = $_POST;
		$this->jogadorCO->_salvar($formulario['idTime'],$formulario['nome'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
		echo "Dados inseridos com sucesso";
	}
        /*
            This function is responsible to list the teams.
        */
	public function listarTimesParaSelect(){
		$timeCO = new TimeController();
		return $timeCO->_listarTimesParaSelect();
	}
        /*
            This function is responsible to list the player to the table.
        */
	public function listarJogadoresParaTabela(){
		return $this->jogadorCO->_listarJogadoresParaTabela();
	}
        /*
            This function is responsible to list the players of team A.
        */
	public function listarJogadoresParaSumulaTimeA($time,$idTempo){
		return $this->jogadorCO->_listarJogadoresParaSumulaTimeA($time,$idTempo);
	}
        /*
            This function is responsible to list the player of team B.
        */
	public function listarJogadoresParaSumulaTimeB($time,$idTempo){
		return $this->jogadorCO->_listarJogadoresParaSumulaTimeB($time,$idTempo);
	}
        /*
            This function is responsible to update the player information.
        */
	public function atualizar($id){
		$formulario = $_POST;
		return $this->jogadorCO->_atualizar($id,$formulario['idTime'], $formulario['nome'], $formulario['data_nascimento'],$formulario['cpf'],$formulario['numero']);
	}
        /*
            This function is responsible to delete the player.
        */
	public function excluir($id){
		return $this->jogadorCO->_excluir($id);
	}
        /*
            This function is responsible to consult player by the id.
        */
	public function consultarPorId($id){
		return $this->jogadorCO->_consultarPorId($id);
	}
}
