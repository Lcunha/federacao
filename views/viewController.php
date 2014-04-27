<?php
$page = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($page){
	case 'ano':
		include(__APP_PATH.'/views/year.php');
		break;
	case 'tipo':
		include(__APP_PATH.'/views/type.php');
		break;
	case 'tecnico':
		include(__APP_PATH.'/views/rud_Coach.php');
		break;
	case 'jogador':
		include(__APP_PATH.'/views/rud_Player.php');
		break;		
	case 'arbitro':
		include(__APP_PATH.'/views/rud_Referee.php');
		break;		
	case 'time':
		include(__APP_PATH.'/views/rud_Team.php');
		break;	
	case 'sumula':
		include(__APP_PATH.'/views/docket.php');
		break;
	case 'EditarReferee':
		include(__APP_PATH.'/views/cad_Referee.php');
		break;
	case 'cad-tecnico':
		include(__APP_PATH.'/views/cad_Coach.php');
		break;
	case 'cad-jogador':
		include(__APP_PATH.'/views/cad_Player.php');
		break;
	
	case 'cad-time':
		include(__APP_PATH.'/views/cad_Team.php');
		break;
	case 'campeonato':
		include(__APP_PATH.'/views/championship.php');
		break;
            
	case 'duranteJogo':
		include(__APP_PATH.'/views/duringGame.php');
		break;
	default:
		include(__APP_PATH.'/views/initial.php');	
}