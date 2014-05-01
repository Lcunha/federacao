<?php 
include_once(__APP_PATH.'/view/MainView.php');
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
	float: left;
	border: 1px solid #CCC;
	border-radius: 3px 3px 3px 3px;
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
        <div id="caixa1">
        <h2 style="margin: 0 auto; width: 1024px; text-align:center;">Graficos</h2><br/>
         	<div id="graficos">
            	<div id="butao-cliente">
                	<?php echo $mainVW->amountTeamsRecords();?><br />Team
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->amountPlayersRecords();?><br />Players
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->amountCoachesRecords();?><br />Coach
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->amountRefereesRecords();?><br />Referee
                </div>
                <div id="clear"></div>            
             </div>
        </div>
      <aside class="aling"> 
      <h2 style="margin: 0 auto; width: 1024px; text-align:center; margin-top: 10px;">Tabela do campeonato</h2><br/>
        <table border=0 style="width: 650px;">
        	<thead>
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
				$tr = $mainVW->listAllTeamsForChampionshipTable();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
            	?>
        </table>
        
        <table border=0 style="width: 320px; margin-left: 10px;">
        	 <tr style="background: #09F; border:#09f; color: #fff; ">
            		<th><small>N&ordm;</small></th>
                	<th><small>Jogador</small></th>
                    <th><small>Time</small></th>
                    <th class="th-piqueno"><small>G</small></th>
                </tr>
			 </thead>
        	<?php 
        		$tr = $mainVW->listGunners();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
        	?> 
        </table>
       <div id="clear"></div>
       </aside>
        
            	