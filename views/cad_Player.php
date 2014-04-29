
<!--corpo-->
<style type="text/css">
.input{
    font-family: Arial, Verdana;
    font-size: 20px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 300px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}	
.hint{
    display:none;
}
/*.field:hover .hint {;
	margin: 0 auto
    position: absolute;
    display: block;
    margin: -10px 0 0 200px;
    color: #999;
    padding: 7px 10px;
    background: rgba(0, 0, 0, 0.6);
 
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    border-radius: 7px;
}*/
#contactform {
    color: #999;
    width: 500px;
    padding: 20px;
    overflow:auto;
	margin: 0 auto;
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
</style>
<?php 
require_once __APP_PATH.'/view/PlayerView.php';
$playerVW = new PlayerView();	
$id = isset( $_GET['id'] ) ? $_GET['id'] : null;
$action = isset( $_GET['action'] ) ? $_GET['action'] : null;
if($action == "edit"){
	$playerData = $playerVW->consultByIdPlayer($id);
?>
<center><h2> Alterar Cadastro</h2></center>
	<form id="contactform" method="post" action="">
    	<div class="field">
        	<input type="text" class="input" name="nome" id="nome" placeholder="Nome do Jogador" value="<?php echo $playerData['nome']?>" required>
        </div>
        <div class="field">
        	<select class="input" name="idTime" id="idTime" required>
        	<?php 
        		$options = $playerVW->listAllTeamsForSelect();
        		for($i=0;$i<count($options);$i++){
					echo $options[$i];
				}
        	?>
        	</select>
        </div>
        <div class="field">
    	<input type="date" class="input" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimeto" value="<?php echo $playerData['data_nascimento']?>"required>
        </div>
        <div class="field">
    	<input type="text" class="input" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $playerData['cpf']?>"required>
        </div>
        <div class="field">
    	<input type="text" class="input" name="numero" id="numero" placeholder="Numero da Camisa" value="<?php echo $playerData['numero']?>" required>
        </div>
        <input type="submit" class="but but-success" name="Alterar" value="Editar">
	</form>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$playerVW->updatePlayer($id);
	}
}
else {
?>
<center><h2> Cadastro de Jogadores</h2></center>
	<form id="contactform" method="post" action="">
    	<div class="field">
        	<input type="text" class="input" name="nome" id="nome" placeholder="Nome do Jogador" required>
        </div>
        <div class="field">
        	<select class="input" name="idTime" id="idTime" required>
        	<?php 
        		$options = $playerVW->listAllTeamsForSelect();
        		for($i=0;$i<count($options);$i++){
					echo $options[$i];
				}
        	?>
        	</select>
        </div>
        <div class="field">
    	<input type="date" class="input" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimeto" required>
        <p class="hint">Informe a data de nascimento</p>
        </div>
        <div class="field">
    	<input type="text" class="input" name="cpf" id="cpf" placeholder="CPF" required>
        </div>
        <div class="field">
    	<input type="text" class="input" name="numero" id="numero" placeholder="Numero da Camisa" required>
        </div>
        <input type="submit" class="but but-success" name="Cadastrar" value="Cadastrar">
        <input type="reset" class="but but-error" name="apagar" value="Limpar">
	</form>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$playerVW->savePlayer();
	}
}
