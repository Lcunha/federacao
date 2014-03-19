var contGol = 0;

function acrescentarGol(contGol){
	contGol++;
	document.getElementById("gols").innerHTML = contGol + " " + "gols";
	return contGol;
}
function decrementarGol(contGol){
	contGol--;
	document.getElementById("gols").innerHTML = contGol + " " + "gols";
	return contGol
}