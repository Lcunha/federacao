function persistirDadosCampeonato(timeGolsTimeA,timeGolsTimeB){
	var xmlhttp;
	var url = window.location.href;
	var parametros = url.split("?")[1];
	var parametrosA = parametros.split("&")[1];
	var parametrosB = parametros.split("&")[2];
	var parametrosIdA = parametrosA.split("=")[1];
	var parametrosIdB = parametrosB.split("=")[1];

	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	  {  
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
		  	 // alert("inserido");
			  alert(xmlhttp.responseText);
		  }
	  }
	//xmlhttp.open("GET","view/AjaxDadosCampeonatoView.php?jogadorId="+jogadorId+"&jogadorGol="+jogadorGol+"&jogadorA="+jogadorA+"&jogadorP="+jogadorP+"&jogadorD="+jogadorD+"&jogadorR="+jogadorR+"",true);
	xmlhttp.open("GET","view/AjaxDadosCampeonatoView.php?idA="+parametrosIdA+"&idB="+parametrosIdB+"&golsTimeA="+timeGolsTimeA+"&golsTimeB="+timeGolsTimeB+"",true);
	xmlhttp.send();
	}
