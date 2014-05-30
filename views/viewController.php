<?php
$page = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($page){
	case 'ano':
		include(__APP_PATH.'/views/year.php');
		include(__APP_PATH.'/views/var.php');
                break;
	case 'tipo':
		include(__APP_PATH.'/views/type.php');
		include(__APP_PATH.'/views/var.php');
                break;
	case 'tecnico':
		include(__APP_PATH.'/views/rud_Coach.php');
                include(__APP_PATH.'/views/var.php');
                break;
        case 'coach':
                include (__APP_PATH.'/views/languages/english/rud_CoachEnglish.php');
		include(__APP_PATH.'/views/var.php');
                break;    
	case 'jogador':
		include(__APP_PATH.'/views/rud_Player.php');
		include(__APP_PATH.'/views/var.php');
                break;	
        case 'player':
		include(__APP_PATH.'/views/languages/english/rud_Player.php');
		
                break;    
	case 'arbitro':
		include(__APP_PATH.'/views/languages/english/rud_RefereeEnglish.php');
		include(__APP_PATH.'/views/var.php');
                break;	
        case 'referee':
		include(__APP_PATH.'/views/rud_Referee.php');
		break;    
	case 'time':
		include(__APP_PATH.'/views/rud_Team.php');
		include(__APP_PATH.'/views/var.php');
                break;	
        case 'team':
		include(__APP_PATH.'/views/languages/english/rud_TeamEnglish.php');
		break;	    
	case 'sumula':
		include(__APP_PATH.'/views/docket.php');
            break;
       case 'emulates':
		include(__APP_PATH.'/views/docket.php');
		break;
            
            
	case 'EditarReferee':
		include(__APP_PATH.'/views/cad_Referee.php');
		break;
	case 'cad-tecnico':
		include(__APP_PATH.'/views/cad_Coach.php');
		include(__APP_PATH.'/views/var.php');
                break;
	case 'cad-jogador':
		include(__APP_PATH.'/views/cad_Player.php');
		include(__APP_PATH.'/views/var.php');
                break;
	
	case 'cad-time':
		include(__APP_PATH.'/views/cad_Team.php');
		include(__APP_PATH.'/views/var.php');
                break;
	case 'campeonato':
		include(__APP_PATH.'/views/championship.php');
		include(__APP_PATH.'/views/var.php');
                break;
            
	case 'duranteJogo':
		include(__APP_PATH.'/views/duringGame.php');
		break;
        case 'ingles':
                include (__APP_PATH.'/views/languages/english/initialIngles.php');
                include (__APP_PATH.'/views/languages/english/newEmptyPHP.php');
		break;
        case 'port':
                include (__APP_PATH.'/views/initial.php');
               // include (__APP_PATH.'/views/languages/english/newEmptyPHP.php');
		break;    
            
	default:
		include(__APP_PATH.'/views/initial.php');	
}