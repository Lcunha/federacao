<?php 
include_once('C:/xampp/htdocs/fedHandebol/views/MainView.php');
$mainVW = new MainView();

?>
<style>
#caixa1{
	margin: 0 auto;
	width: 1024px;
}
#graficos{
	width: 660px;
	margin: 0 auto;
}
table{
	margin: o auto;
	border: 1px solid #CCC;
	border-radius: 4px;
	background: #F2F2F2;
}
tr{
	border: 1px solid #ccc;
}
th{
	border: 1px solid #ccc;
	border-width: thin;
}
.th-cor{
	background: #FFF;
}
.th-piqueno{
	width: 40px;
}
.aling{
	margin: 0 auto;
	width: 1024px;
}
</style>
 <aside class="aling"> 
      <h2 style="margin: 0 auto; width: 1024px; text-align:center; margin-top: 10px;">Dados do Campeonato</h2><br/>
       <aside style="margin: 0 auto; text-align:center">
        <table border=0 style="width: 650px; margin:0 auto;">
        	<thead>
            <h2><small>tabela do campeonato</small></h2>
            <tr style="background: #09F; border:#09f; color: #fff;">
                	<th class="th-piqueno"><small>Posicao</small></th>
                	<th><small>Time</small></th>
                    <th class="th-piqueno"><small>P</small></th>
                    <th class="th-piqueno"><small>J</small></th>
                    <th class="th-piqueno"><small>V</small></th>
                    <th class="th-piqueno"><small>E</small></th>
                    <th class="th-piqueno"><small>D</small></th>
                    <th class="th-piqueno"><small>GP</small></th>
                    <th class="th-piqueno"><small>GC</small></th>
                    <th class="th-piqueno"><small>SG</small></th>
                    <th class="th-piqueno"><small>%</small></th>
                </tr>
            </thead>
            	<?php 
				$tr = $mainVW->listarTimesParaTabelaCampeonato();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
            	?>
        </table>
        </aside>
        <aside style="float:left; text-align:center">
                <table border=0 style="width: 320px; margin-left: 10px;">
                <h2><small>Artilheiros</small></h2>
        	<thead>
            	<tr style="background: #09F; border:#09f; color: #fff; ">
            		<th><small>Nº</small></th>
                	<th><small>Jogador</small></th>
                    <th><small>Time</small></th>
                    <th class="th-piqueno"><small>G</small></th>
                </tr>
            </thead>
            	<?php 
        		$tr = $mainVW->listarArtilheiros();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
        		?> 
        </table>
        </aside>
        <aside style="float: left; text-align:center">
        <table border=0 style="width: 320px; margin-left: 10px;">
          
        	<thead><h2><small>Fear Players</small></h2>
            	<tr style="background: #09F; border:#09f; color: #fff; ">
            		<th><small>Nº</small></th>
                	<th><small>Jogador</small></th>
                    <th><small>Time</small></th>
                    <th class="th-piqueno"><small>F</small></th>
                </tr>
            </thead>
            	<?php 
        		$tr = $mainVW->listarFearPlayers();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
        		?> 
        </table>
        </aside>
       <div id="clear"></div>
       </aside>