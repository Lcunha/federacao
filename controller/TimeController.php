<?php
include_once(__APP_PATH.'/persistence/TimeDAO.php');
include_once(__APP_PATH.'/persistence/DadosTimeDAO.php');
include_once(__APP_PATH.'/model/Time.php');
include_once(__APP_PATH.'/model/DadosTime.php');
class TimeController{

	private $timeDAO;

	public function __construct(){
		$this->timeDAO = new TimeDAO();
	}
	public function _listarTimesParaSelect(){
		$dadosTime = new Time();
		$arrayDadosTime = $this->timeDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTime); $i++){
			$dadosTime = $arrayDadosTime[$i];
			$arraySelect[] = "<option value=\"".$dadosTime->__getIdTime()."\">".$dadosTime->__getNome()."</option>";
		}
		print_r(lol);
		return $arraySelect;
	}
	public function _listarTodosJogadores($idTime){
		return $this->timeDAO->listarTodosJogadores($idTime);
	}
	public function _listarTimeParaTabela(){
		$dadosTime = new Time();
		$arrayDadosTime = $this->timeDAO->listarTodos();
		for($i=0;$i<count($arrayDadosTime); $i++){
			$dadosTime = $arrayDadosTime[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					
					<td>".$dadosTime->__getNome()."</td>
          			<td>".$dadosTime->__getCategoria()."</td>
          			<td>".$dadosTime->__getEndereco()."</td>
          			<td>".$dadosTime->__getDataFundacao()."</td>
					<td>".$dadosTime->__getPresidente()."</td>
					<td>".$dadosTime->__getTelefone()."</td>
					<td>".$dadosTime->__getPontos()."</td>
          			<td>
            			<a href=\"?pag=time&action=edit&id=".$dadosTime->__getIdTime()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=time&action=exclude&id=".$dadosTime->__getIdTime()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		return $arrayTr;
	}
	public function _listarTodos(){
		return $this->timeDAO->listarTodos();
	}
	public function _listarTodoPorPontos(){
		return $this->timeDAO->listarTodosPorPontos();
	}
	public function _consultarPorId($id){
		$dadosTime = new Time();
		$dadosTime =  $this->timeDAO->consultarPorId($id);
		$arrayDados['idTecnico'] = $dadosTime->__getIdTecnico();
		$arrayDados['nome'] = $dadosTime->__getNome();
		$arrayDados['categoria'] = $dadosTime->__getCategoria();
		$arrayDados['endereco'] = $dadosTime->__getEndereco();
		$arrayDados['dataFundacao'] = $dadosTime->__getDataFundacao();
		$arrayDados['categoria'] = $dadosTime->__getCategoria();
		$arrayDados['presidente'] = $dadosTime->__getPresidente();
		$arrayDados['telefone'] = $dadosTime->__getTelefone();
		$arrayDados['pontos'] = $dadosTime->__getPontos();
		return $arrayDados;
	}
	public function _consultarPorNome($nome){
		return $this->timeDAO->consultarPorNome($nome);
	}
	public function _salvar($idTecnico,$nome,$categoria,$endereco,$dataFundacao,$presidente,$telefone){
		$dadosTime = new Time();
		$dadosDadosTime = new DadosTime();
		$dadosDadosTimeDAO = new DadosTimeDAO();
		$dadosTime->__constructOverload(0, $idTecnico, $nome, $categoria, $endereco, $dataFundacao, $presidente, $telefone,0);
		$idTime = $this->timeDAO->inserir($dadosTime);
		$dadosDadosTime->__constructOverload(0, $idTime,0,0,0,0,0,0,0);
		return $dadosDadosTimeDAO->inserir($dadosDadosTime);
	}
	public function _atualizar($id,$idTecnico, $nome, $categoria, $endereco, $dataFundacao, $presidente, $telefone){

		$dadosTime = new Time();
		$dadosTime->__constructOverload($id,$idTecnico, $nome, $categoria, $endereco, $dataFundacao, $presidente, $telefone,0);
		$this->timeDAO->atualizar($dadosTime);
	
	}
	public function _excluir($id){
		return $this->timeDAO->excluir($id);
	}
	public function _contarRegistrosTime(){
		return $this->timeDAO->contarRegistrosTime();
	}
	public function _listarTimesParaTabelaCampeonato(){
		$dadosTime = new DadosTime();
		$time = new TimeController();
		$arrayDadosTime = $this->timeDAO->listarTodosPorPontos();
		$tamanho = count($arrayDadosTime);
		for($i=0;$i<$tamanho; $i++){
			$dadosTime = $arrayDadosTime[$i];	
			$pos=$i;
			$pos++;
			$var = $time->_consultarPorId($dadosTime->__getIdTime());
			$nome = $var['nome'];
			$saldo = $dadosTime->__getGols() - $dadosTime->__getGolsLevados();
			if($dadosTime->__getJogos()!= 0){
				$porcentagem = (int)( 100*($dadosTime->__getVitorias())/($dadosTime->__getJogos()));
			}
			else{
				$porcentagem = 0;
			}
				
		$arrayTr[] =" 
			<tr>
				<th class=\"th-piqueno th-cor\">".$pos."</th>
				<th class=\"th-cor\">$nome</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getPontos()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getJogos()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getVitorias()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getEmpates()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getDerrotas()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getGols()."</th>
				<th class=\"th-piqueno th-cor\">".$dadosTime->__getGolsLevados()."</th>
				<th class=\"th-piqueno th-cor\">".$saldo."</th>
				<th class=\"th-piqueno th-cor\">".$porcentagem."</th>
			</tr>
			";			
		}
		return $arrayTr;
	}
				
}
