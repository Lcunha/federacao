<?php
/*
Name: JogoView.php
Description: This view shows the data of each game.
*/
include_once('./controller/JogoController.php');
include_once('./controller/TempoController.php');

class JogoView{
	private $jogoCO;
	private $tempoCO;
	
	public function __construct(){
		$this->jogoCO = new JogoController();
		$this->tempoCO = new TempoController();
	}
	public function listarTodos(){
		return $this->jogoCO->_listarTodos();
	}
	public function consultarPorId($id){
		return $this->jogoCO->_consultarPorId($id);
	}
	public function inserir(){
		return $this->jogoCO->_inserir($_POST['espectadores'],$_POST['cidade'],$_POST['local'],$_POST['data'],$_POST['hora'],$_POST['duracao'],0);
	}
	public function salvar(){
		return $this->jogoCO->_salvar($_POST['idTimeA'],$_POST['idTimeB'],$_POST['espectadorez'],$_POST['cidade'],$_POST['local'],$_POST['data'],$_POST['hora'],$_POST['duracao']);
	}
	public function excluir($id){
		return $this->jogoCO->_excluir($id);
	}
	public function inserirTempo($idJogo){
		return $this->tempoCO->_inserirTempo($idJogo);
	}
}