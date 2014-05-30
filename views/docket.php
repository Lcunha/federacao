<style>
.medidas{
	margin: 0 auto;
	width: 1024px;
	text-align: center;
	border-bottom: 1px solid #CCC;
	padding: 4px;
}
.fundo{
	background: #CCC;
}
aside{
 width: 300px;
 float: left;
}
.medida-td1{
	width: 100px;
	text-align: center;
}
.medida-td2{
	width: 250px;
	text-align: center;
}
td{
	width: 30px;
}
th{
	width: 30px;
}
.td{
	width: 40px;
}
.td2{
	width: 35px;
}
.input{
    font-family: Arial, Verdana;
    font-size: 14px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 200px;
    color: #797979;
	margin-bottom: 10px;
	-moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.input2{
    font-family: Arial, Verdana;
    font-size: 14px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 100px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.inputCaixa{
    font-family: Arial, Verdana;
    font-size: 20px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 50px;
    height: 40px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    text-align: center;
}
.but {
display: inline-block;
background-color: #ccc;
color: #444;
padding: 10px 20px;
text-decoration: none;
box-sizing: border-box;
font-family: Helvetica, Arial, sans-serif;
font-size: 14px;
border: 0px;
border-radius: 2px;
margin: 1px;
}
.but:hover {
background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,.15));
cursor: pointer;
}
.but-success {
color: #fff;
background-color: #009835;
}
.but-error {
color: #fff;
background-color: #CC0000;
}
.but-primary{
color: #fff;
background-color: #0068B4;
}
.but-cron {
color: #fff;
background-color: #0068B4;
height: 50px;
}
.but-gol {
color: #fff;
background-color: #009835;
width: 40px;
height: 20px;
padding: 1px 1px;
}
.but-retirarGol {
color: #fff;
background-color: #CC0000;
width: 40px;
height: 20px;
padding: 1px 1px;
}
.align-but{
	float: right;
}
#but{
	margin: 0 auto;
	width: 1024px;
	margin-top: 5px;
	margin-bottom: 10px;
	border-bottom: 1px solid #CCC;
}
.tr{
	border: 1px solid #666;
}
.esp{
	margin-left: 5px;
}
.td_esp{
    margin-right: 10px;
}
.tm_th{
    
}
</style>
<?php 
require_once __APP_PATH.'/view/PlayerView.php';
require_once __APP_PATH.'/view/DataTeamView.php';
require_once __APP_PATH.'/view/TeamGameView.php';
require_once __APP_PATH.'/view/GameView.php';
require_once __APP_PATH.'/view/GameDataView.php';



$playerVW = new PlayerView();	
$dataTeamVW = new DataTeamView();
$teamGameVW = new TeamGameView();
$gameVW = new GameView();
$gameDataVW = new GameDataView();
$arrayGames = $gameVW->listAllGames();
$actualGameNumber = count($arrayGames)+1;
?>


<div id="comecoDoGame">









<h2 style="margin: 0 auto; width: 1024px; text-align:center;">INICIAR JOGO  Nº <?php echo $actualGameNumber?></h2>

<form method="post" style="margin: 0 auto;" >
<table class="medidas" border="0">
<tr>
	<td></td>
    <td><small>Equipe Local</small></td>
    <td></td>
	<td></td>
    <td><small>Equipe Visitante</small></td>
    <td><small>Espectadores</small></td>
</tr>
<tr>
	<td>A</td>
	<td>
		<select class="input" name="idTeamA" id="idTeamA" required>
	        	<?php 
	        		$options = $playerVW->listAllTeamsForSelect();
	        		for($i=0;$i<count($options);$i++){
						echo $options[$i];
					}
	        	?>
	    </select>
    </td>
    <td><small>Versos</small></td>
	<td>B</td>
   <td>
		<select class="input" name="idTeamB" id="idTeamB" required>
	        	<?php 
	        		$options = $playerVW->listAllTeamsForSelect();
	        		for($i=0;$i<count($options);$i++){
						echo $options[$i];
					}
	        	?>
	    </select>
    </td>
	<td>
		<input type="text" class="inputCaixa" name="espectadores" id="espectadores" placeholder="Nº"  required>
    </td>
</tr>

</table>
<table class="medidas" border=0>
<tr>
	<td class="medida-td1"><small>Cidade</small></td>
    <td class="medida-td1"><small>Local</small></td>
    <td class="medida-td2"><small>Data</small></td>
	<td class="medida-td2"><small>Hora</small></td>
    <td></td>
    <td class="medida-td2"><small>Duração</small></td>

    </tr>
<tr>
	<td class="medida-td2">
		<input class="input" type="text" name="cidade" id="cidade" placeholder="Nome da cidade" required>
	</td>
    <td class="medida-td2"><input class="input" type="text" name="local" id="local" placeholder="Nome do local" required></td>
    <td class="medida-td1"><input class="input2" type="date" name="data" id="data" required></td>
    <td class="medida-td1"><input class="input2" type="team" name="hora" id="hora" required></td>
    <td></td>
    <td class="medida-td1"><input class="inputCaixa" type="text" name="duracao" id="duracao" placeholder="Nº" required></td>
</tr>
</form>
</table>
<div id="but">
<input type="button" name="iniciar-game" class="but but-error align-but" value="Limpar" onclick="window.location.href='?pag=sumula'">
<input type="submit" name="iniciar-game" class="but but-success align-but" value="Iniciar">
<div id="clear"></div>
</div>
</div>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$team1 = $_POST['timeA'];
	$team2 = $_POST['timeB'];
	$idActualGame = $gameVW->insertGame();
	$teamGameVW->saveTeamGame($idActualGame,$_POST['timeA']);
	$teamGameVW->saveTeamGame($idActualGame,$_POST['timeB']);
	$gameVW->insertGame($actualGameNumber);
	$idTimeInserted = mysql_insert_id();
	$gameDataVW->insertDataTeam($idTimeInserted,$team1,$team2);
	echo" <script>document.location.href='?pag=duringGame&idA=".$team1."&idB=".$team2."&idTime=".$idTimeInserted."'</script>";

}