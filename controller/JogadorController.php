<?php
include_once(__APP_PATH.'/persistence/JogadorDAO.php');
include_once(__APP_PATH.'/model/Jogador.php');
class JogadorController{
	private $jogadorDAO;
	
	public function __construct(){
		$this->jogadorDAO = new JogadorDAO();
	}
	public function _listarTecnicosParaSelect(){
		$dadosJogador = new Jogador();
		$arrayDadosJogador = $this->jogadorDAO->listarTodos();
		for($i=0;$i<count($arrayDadosJogador); $i++){
			$dadosJogador = $arrayDadosJogador[$i];
			$arraySelect[] = "<option value=\"".$dadosJogador->__getIdJogador()."\">".$dadosJogador->__getNome()."</option>";
		}
		return $arraySelect;
	}
	public function _listarJogadoresParaTabela(){
		$dadosJogador = new Jogador();
		$arrayDadosJogador = $this->jogadorDAO->listarTodos();
		for($i=0;$i<count($arrayDadosJogador); $i++){
			$dadosJogador = $arrayDadosJogador[$i];
			$arrayTr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>".$dadosJogador->__getIdJogador()."</td>
          			<td>".$dadosJogador->__getIdTime()."</td>
          			<td>".$dadosJogador->__getNome()."</td>
          			<td>".$dadosJogador->__getDataNascimento()."</td>
          			<td>".$dadosJogador->__getCpf()."</td>
          			<td>".$dadosJogador->__getNumero()."</td>
          			<td>
            			<a href=\"?pag=jogador&action=edit&id=".$dadosJogador->__getIdJogador()."\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=jogador&action=exclude&id=".$dadosJogador->__getIdJogador()."\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
		}
		
		return $arrayTr;
	}
	public function _listarJogadoresParaSumulaTimeA($time,$idTempo){;
		$idJogador[0] = -1;
		$dadosJogador = new Jogador();
		$arrayDadosJogador = $this->jogadorDAO->listarTodos();
		for($i=0;$i<count($arrayDadosJogador); $i++){
			$dadosJogador = $arrayDadosJogador[$i];
			if($dadosJogador->__getIdTime() == $time){
				$jogadorTime[] = $dadosJogador;
			}
		}
		
		for($i=0;$i<count($jogadorTime); $i++){
			$dadosJogadorTime = $jogadorTime[$i];
			$arrayTr[] = "
				
				<tr>
	          	<th>
				</th>
				<th class=\"tr\">".$dadosJogadorTime->__getNumero()."</th>
				<th class=\"tr\">".$dadosJogadorTime->__getNome()."</th>
	            <th class=\"tr\" id =\"golJogadorTimeA$i\">0</th>
	            <script>var jogadorIdA$i = ".$dadosJogadorTime->__getIdJogador()." </script>
	            <th>
	             	<script>var contGolTimeA$i = 0</script>
		            <input id=\"acrescentaGolA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contGolTimeA$i++;document.getElementById('golJogadorTimeA$i').innerHTML=contGolTimeA$i;timeGolsTimeA++;inserirGolTimeA(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
					<input id=\"decrementaGolA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contGolTimeA$i--;timeGolsTimeA--;if(contGolTimeA$i<0){contGolTimeA$i++;timeGolsTimeA++;}document.getElementById('golJogadorTimeA$i').innerHTML=contGolTimeA$i;inserirGolTimeA(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
					
					</th></th>
		            <th class=\"tr\" id=\"jogadorATimeA$i\">0	
	            </th>
	            <th>
		            <script>var contATimeA$i = 0</script>
					<input id=\"acrescentaAA\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contATimeA$i++;document.getElementById('jogadorATimeA$i').innerHTML=contATimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
					<input id=\"decrementaAA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contATimeA$i--;if(contATimeA$i<0){contATimeA$i++;}document.getElementById('jogadorATimeA$i').innerHTML=contATimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\"></th>
	            	<th class=\"tr\" id=\"jogadorDoisMinutosTimeA$i\">0
	            </th>
		            <th><script>var contDoisMinutosTimeA$i = 0</script>
					<input id=\"acrescentaDoisA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDoisMinutosTimeA$i++;document.getElementById('jogadorDoisMinutosTimeA$i').innerHTML=contDoisMinutosTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
					<input id=\"decrementaDoisA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDoisMinutosTimeA$i--;if(contDoisMinutosTimeA$i<0){contDoisMinutosTimeA$i++;}document.getElementById('jogadorDoisMinutosTimeA$i').innerHTML=contDoisMinutosTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\"></th>
		            <th class=\"tr\" id=\"jogadorDTimeA$i\">0
	            </th>
	            <th>
		            <script>var contDTimeA$i = 0</script>
					<input id=\"acrescentaDA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDTimeA$i++;document.getElementById('jogadorDTimeA$i').innerHTML=contDTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
					<input id=\"decrementaDA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDTimeA$i--;if(contDTimeA$i<0){contDTimeA$i++;}document.getElementById('jogadorDTimeA$i').innerHTML=contDTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\"></th>
					<th class=\"tr\" id=\"jogadorDRTimeA$i\">0
				</th>
				<th><script>var contDRTimeA$i = 0</script>
				<input id=\"acrescentaDRA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDRTimeA$i++;document.getElementById('jogadorDRTimeA$i').innerHTML=contDRTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
				<input id=\"decrementaDRA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDRTimeA$i--;if(contDRTimeA$i<0){contDRTimeA$i++;}document.getElementById('jogadorDRTimeA$i').innerHTML=contDRTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i,".$idTempo.");\">
				</th>		
			</tr>";
		}
		
		return $arrayTr;	
	}
	public function _listarJogadoresParaSumulaTimeB($time,$idTempo){;
	$idJogador[0] = -1;
	$dadosJogador = new Jogador();
	$arrayDadosJogador = $this->jogadorDAO->listarTodos();
	for($i=0;$i<count($arrayDadosJogador); $i++){
		$dadosJogador = $arrayDadosJogador[$i];
		if($dadosJogador->__getIdTime() == $time){
			$jogadorTime[] = $dadosJogador;
		}
	}
	
	for($i=0;$i<count($jogadorTime); $i++){
		$dadosJogadorTime = $jogadorTime[$i];
		$arrayTr[] = "
				
				<tr>
	          	<th>
				</th>
				<th class=\"tr\">".$dadosJogadorTime->__getNumero()."</th>
				<th class=\"tr\">".$dadosJogadorTime->__getNome()."</th>
				<script>var jogadorIdB$i = ".$dadosJogadorTime->__getIdJogador()." </script>
					<th class=\"tr\" id =\"golJogadorTimeB$i\">0</th>
					<th>
					<script>var contGolTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contGolTimeB$i++;document.getElementById('golJogadorTimeB$i').innerHTML=contGolTimeB$i;timeGolsTimeB++;inserirGolTimeB(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contGolTimeB$i--;timeGolsTimeB--;if(contGolTimeB$i<0){contGolTimeB$i++;timeGolsTimeB++;}document.getElementById('golJogadorTimeB$i').innerHTML=contGolTimeB$i;inserirGolTimeB(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					</th></th>
					<th class=\"tr\" id=\"jogadorATimeB$i\">0
					</th>
					<th>
					<script>var contATimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contATimeB$i++;document.getElementById('jogadorATimeB$i').innerHTML=contATimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contATimeB$i--;if(contATimeB$i<0){contATimeB$i++;}document.getElementById('jogadorATimeB$i').innerHTML=contATimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\"></th>
					<th class=\"tr\" id=\"jogadorDoisMinutosTimeB$i\">0
					</th>
					<th><script>var contDoisMinutosTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDoisMinutosTimeB$i++;document.getElementById('jogadorDoisMinutosTimeB$i').innerHTML=contDoisMinutosTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDoisMinutosTimeB$i--;if(contDoisMinutosTimeB$i<0){contDoisMinutosTimeB$i++;}document.getElementById('jogadorDoisMinutosTimeB$i').innerHTML=contDoisMinutosTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\"></th>
					<th class=\"tr\" id=\"jogadorDTimeB$i\">0
					</th>
					<th>
					<script>var contDTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDTimeB$i++;document.getElementById('jogadorDTimeB$i').innerHTML=contDTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDTimeB$i--;if(contDTimeB$i<0){contDTimeB$i++;}document.getElementById('jogadorDTimeB$i').innerHTML=contDTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\"></th>
					<th class=\"tr\" id=\"jogadorDRTimeB$i\">0
					</th>
					<th><script>var contDRTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDRTimeB$i++;document.getElementById('jogadorDRTimeB$i').innerHTML=contDRTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDRTimeB$i--;if(contDRTimeB$i<0){contDRTimeB$i++;}document.getElementById('jogadorDRTimeB$i').innerHTML=contDRTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i,".$idTempo.");\">
					</th>
	
					</tr>";
	}
	
	return $arrayTr;
	}
	public function _listarTodos(){
		return $this->jogadorDAO->listarTodos();
	}
public function _consultarPorId($id){
		$dadosJogador = new Jogador();
		$dadosJogador =  $this->jogadorDAO->consultarPorId($id);
		$arrayDados['nome'] = $dadosJogador->__getNome();
		$arrayDados['idTime'] = $dadosJogador->__getIdTime();
		$arrayDados['data_nascimento'] = $dadosJogador->__getDataNascimento();
		$arrayDados['cpf'] = $dadosJogador->__getCpf();
		$arrayDados['numero'] = $dadosJogador->__getNumero();
		
		return $arrayDados;
	}
	public function _consultarPorTime($idTime){
		return $this->jogadorDAO->consultarPorTime($idTime);
	}
	public function _consultarPorNome($nome){
		$dadosJogador = new Jogador();
		$dadosJogador =  $this->jogadorDAO->consultarPorNome($id);
		$arrayDados['idTime'] = $dadosJogador->__getIdTime();
		$arrayDados['data_nascimento'] = $dadosJogador->__getDataNascimento();
		$arrayDados['cpf'] = $dadosJogador->__getCpf();
		$arrayDados['numero'] = $dadosJogador->__getNumero();
		
		return $arrayDados;
	}
	public function _inserir(Jogador $jogador){
		return $this->jogadorDAO->inserir($jogador);
	}
	public function _atualizar($idJogador,$idTime,$nome,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload($idJogador,$idTime,$nome,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->atualizar($dadosJogador);
	}
	public function _salvar($nome, $idTime,$dataNascimento,$cpf,$numero){
		$dadosJogador = new Jogador();
		$dadosJogador->__constructOverload(0,$idTime,$nome,$dataNascimento,$cpf,$numero);
		$this->jogadorDAO->inserir($dadosJogador);
	}
	public function _excluir($id){
		return $this->jogadorDAO->excluir($id);
	}
	public function _contarRegistrosJogador(){
		return $this->jogadorDAO->contarRegistrosJogador();
	}
	public function _listarArtilheiros(){
		$arrayArtilheiro = $this->jogadorDAO->listarArtilheiros();
		for($i=0;$i<count($arrayArtilheiro);$i++){
			$dadosArtilheiro = $arrayArtilheiro[$i];
			$arrayTr[]= "
			
			 <tr>
			 <th class=\"th-piqueno th-cor\">".$dadosArtilheiro['numero']."</th>
			 <th class=\"th-cor\">".$dadosArtilheiro['nome']."</th>
			                     <th class=\"th-cor\">".$dadosArtilheiro['time']."</th>
			                     <th class=\"th-piqueno th-cor\">".$dadosArtilheiro['gols']."</th>
			                 </tr>";
		}
		return $arrayTr;
	}
	public function _listarFearPlayers(){
		$arrayFear = $this->jogadorDAO->listarFearPlayers();
		for($i=0;$i<count($arrayFear);$i++){
			$dadosFear= $arrayFear[$i];
			$arrayTr[]= "
		
			 				<tr>
							     <th class=\"th-piqueno th-cor\">".$dadosFear['numero']."</th>
								 <th class=\"th-cor\">".$dadosFear['nome']."</th>
			                     <th class=\"th-cor\">".$dadosFear['time']."</th>
			                     <th class=\"th-piqueno th-cor\">".$dadosFear['faltas']."</th>
			                 </tr>";
		}
		return $arrayTr;
	}
}