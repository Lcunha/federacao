<style>
#qd{
	width: 350px;
	background: #CCC;
	border-radius: 4px;	
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
border-radius: 4px;
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
#text1{
	font-family: "ProximaNovaRegular", sans-serif;
	font-weight: 400;
	font-size: 26px;
	line-height: 40px;
	float: left;
	color:#333;
}
  
</style>
<div id="qd">
	<div id="text1" style="margin: 0 0 10px 10px;">Comfirme exclusão</div><form method="post" action=""><input type="submit" class="but but-success" name="confirma" id="confirma" value="Confirma"> 
</div>
<?php


/*if(isset($_POST["confirma"])== false){
	
	if($pagina = "tecnico"){
		$tecnicoVW->excluir($id);
	}
	
	if($pagina = "arbitro"){
		$arbitroVW->excluir($id);
	}
	if($pagina = "time"){
		$timeVW->excluir($id);
	}
	
	if($pagina = "jogador"){
		$jogadorVW->excluir($id);
	}
}*/
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$playerVW->deletePlayer($id);
}

?>