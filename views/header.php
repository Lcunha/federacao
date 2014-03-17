<!doctype html>
<html>
	<head>
		<title>Federação de Handebol</title>
		<link rel="shortcut icon" href="imagemFED2.ico">
		<?php require_once 'import.php'; ?>
		<script type="text/javascript">
		jQuery(function($){
			$("#telefone").mask("(99)9999-9999"); //CPF
			$("#cpf").mask("999.999.999-99"); //Numero de Telefone
			$("#numero").mask("99"); //Numero da Camisa
		});
		</script>
	</head>
	<body>
		<header>
	
    	<div id="medida">
            <nav>
            <!--<img src="./views/images/imagemFED.jpg" width="100" height="100" style="padding: 4px 10px;" > -->
        		<ul>
                	<li class="borda borda-direita"><a href="">Cadastros</a>
                		<ul> 
                    		<li><a href="?pag=tecnico">Tecnicos</a></li>
                        	<li><a href="?pag=jogador">Jogadores</a></li>
                        	<li><a href="?pag=arbitro">Arbitro</a></li> 
                        	<li><a href="?pag=time">Time</a></li>
                    	</ul>
                    </li>
                	<li class="borda"><a href="?pag=campeonato">Dados do Campeonatos</a>
                		<!--<ul>
                    		<li><a href="">Ranking de time</a></li>
                        	<li><a href="">Artilheiro</a></li>
                        	<li><a href="">Fear Players</a></li>
                        	<li><a href="">Punições</a></li>
            			</ul>-->
                	</li>
                	<li class="borda"><a href="#">Jogos</a>
                	<ul>
                    	<li><a  href="?pag=sumula">Iniciar Jogo</a></li>
                
                    </ul>
                	</li>
                	<li class="borda"><a href="./index.php">Painel Principal</a></li>
	                    </li>
	                    
            	</ul>
        	</nav>
		</div>
		<div id="clear"></div>
	</header>