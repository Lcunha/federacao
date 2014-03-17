function inserirGolTimeA(tempoAtual){
	switch(tempoAtual){
		case 1:
			if (timeGolsTimeA < 0){
				timeGolsTimeA++;
				
			}
			document.getElementById("placarATempo1").value = timeGolsTimeA;
		break;
		case 2:
			if (timeGolsTimeA < 0){
				timeGolsTimeA++;
			}
			document.getElementById("placarATempo2").value = timeGolsTimeA;
		break;
		case 3:
			if (timeGolsTimeA < 0){
				timeGolsTimeA++;
			}
			document.getElementById("placarATempo3").value = timeGolsTimeA;
		break;
		case 4:
			if (timeGolsTimeA < 0){
				timeGolsTimeA++;
			}
			document.getElementById("placarATempo4").value = timeGolsTimeA;
		break;
		case 5:
			if (timeGolsTimeA < 0){
				timeGolsTimeA++;
			}
			document.getElementById("placarATempo5").value = timeGolsTimeA;
		break;
	}
}
function inserirGolTimeB(tempoAtual){
	switch(tempoAtual){
		case 1:
			if (timeGolsTimeB < 0){
				timeGolsTimeB++;
			}
			document.getElementById("placarBTempo1").value = timeGolsTimeB;
		break;
		case 2:
			if (timeGolsTimeB < 0){
				timeGolsTimeB++;
			}
			document.getElementById("placarBTempo2").value = timeGolsTimeB;
		break;
		case 3:
			if (timeGolsTimeB < 0){
			timeGolsTimeB++;
		}
			document.getElementById("placarBTempo3").value = timeGolsTimeB;
		break;
		case 4:
			if (timeGolsTimeB < 0){
				timeGolsTimeB++;
			}
			document.getElementById("placarBTempo4").value = timeGolsTimeB;
		break;
		case 5:
			if (timeGolsTimeB < 0){
				timeGolsTimeB++;
			}
			document.getElementById("placarBTempo5").value = timeGolsTimeB;
		break;
	}
}
function proximoTempo(tempoAtual){
	if (tempoAtual > 4)
	{
		return tempoAtual;
	}
	else{
		tempoAtual++;
		switch(tempoAtual){
			case 2:
				document.getElementById("placarATempo2").value = timeGolsTimeA;
				document.getElementById("placarBTempo2").value = timeGolsTimeB;
			break;
			case 3:
				document.getElementById("placarATempo3").value = timeGolsTimeA;
				document.getElementById("placarBTempo3").value = timeGolsTimeB;
			break;
			case 4:
				document.getElementById("placarATempo4").value = timeGolsTimeA;
				document.getElementById("placarBTempo4").value = timeGolsTimeB;
			break;
			case 5:
				document.getElementById("placarATempo5").value = timeGolsTimeA;
				document.getElementById("placarBTempo5").value = timeGolsTimeB;
			break;
		}
		return tempoAtual;
	}
	function desaparecerBotao(){
		document.getElementById('decrementaGolA0').style.display = 'none';
	}
	function comecoDoJogo(situacao){
		if(situacao==comeco){
			document.getElementById('scriptCronometro').style.display = 'none';
		}
		else{
			document.getElementById('scriptCronometro').style.display = 'block';
		}
	}
}