var intervalo;
function comeca(){	
	dadosTempo = tempo();
	return dadosTempo;
}
	function tempo(op) {
		
		document.getElementById('comecar').style.display = "none";
		document.getElementById('retomar').style.display = "none";
		document.getElementById('parar').style.display = "block";
		
		
		var ms = 1;
		var s = 0;
		var min = 0;
		var dadosTempo = new Array();
		intervalo = window.setInterval(function() {
			if (ms == 60) { s++; ms = 0; }
			if (s == 60) { min++; s = 0; m = 0; }
			if (min < 10) document.getElementById("minuto").innerHTML = "0" + min + "min"; else document.getElementById("min").innerHTML = min + "min";
			if (s < 10) document.getElementById("segundo").innerHTML = "0" + s + "s"; else document.getElementById("segundo").innerHTML = s + "s";
			if (ms < 10) document.getElementById("milisegundo").innerHTML = "0" + ms + "ms"; else document.getElementById("milisegundo").innerHTML = ms + "ms";			
			dadosTempo['milisegundo'] = ms;
			dadosTempo['segundo'] = s;
			dadosTempo['minuto'] = min;
			ms++;
			
		},16,666666666666666666666666666667);
		return dadosTempo;
	}
	
	function parar() {
		
		window.clearInterval(intervalo);
		document.getElementById('parar').style.display = "none";
		document.getElementById('retomar').style.display = "block";
		document.getElementById('comecar').style.display = "block";
	}
	
	function volta() {
		document.getElementById('voltas').innerHTML += document.getElementById('minuto').firstChild.data + "" + document.getElementById('segundo').firstChild.data + "" + document.getElementById('milisegundo').firstChild.data + "<br>";
	}
	
	function limpa() {
		document.getElementById('voltas').innerHTML = "";
	}
	function continua(dadosTempo){
		document.getElementById('parar').style.display = "block";
		document.getElementById('retomar').style.display = "none";
		document.getElementById('comecar').style.display = "none";
		var ms = dadosTempo['milisegundo'];
		var s = dadosTempo['segundo'];
		var min = dadosTempo['minuto'];
		ms++;
		intervalo = window.setInterval(function() {
			
			if (ms == 60) { s++; ms = 0; }
			if (s == 60) { min++; s = 0; m = 0; }
			if (min < 10) document.getElementById("minuto").innerHTML = "0" + min + "min"; else document.getElementById("min").innerHTML = min + "min";
			if (s < 10) document.getElementById("segundo").innerHTML = "0" + s + "s"; else document.getElementById("segundo").innerHTML = s + "s";
			if (ms < 10) document.getElementById("milisegundo").innerHTML = "0" + ms + "ms"; else document.getElementById("milisegundo").innerHTML = ms + "ms";		
			dadosTempo['milisegundo'] = ms;
			dadosTempo['segundo'] = s;
			dadosTempo['minuto'] = min;
			ms++;
		},16,666666666666666666666666666667);
		return dadosTempo;
	}
	
