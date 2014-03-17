	function persistirTempo(tempoAtual)
	{
		switch(tempoAtual){
		case 1:
			placarA = document.getElementById("placarATempo1").value;
			placarB = document.getElementById("placarBTempo1").value;
		break;
		case 2:
			placarA = document.getElementById("placarATempo2").value;
			placarB = document.getElementById("placarBTempo2").value;
		break;
		case 3:
			placarA = document.getElementById("placarATempo3").value;
			placarB = document.getElementById("placarBTempo3").value;
		break;
		case 4:
			placarA = document.getElementById("placarATempo4").value;
			placarB = document.getElementById("placarBTempo4").value;
		break;
		case 5:
			placarA = document.getElementById("placarATempo5").value;
			placarB = document.getElementById("placarBTempo5").value;
		break;
		default:
			placarA = document.getElementById("placarATempo5").value;
			placarB = document.getElementById("placarBTempo5").value;
		break;
		}
		seteMetrosA=document.getElementById("7MetrosA").value;
		seteMetrosB=document.getElementById("7MetrosB").value;
	var xmlhttp;
	/*if (document.getElementById("placarATempo1")=="")
	  {
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }*/
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
			  //alert(xmlhttp.responseText);  	
		  }
	  }
	xmlhttp.open("GET","view/AjaxView.php?placarA="+placarA+"&placarB="+placarB+"&seteMetrosA="+seteMetrosA+"&seteMetrosB="+seteMetrosB+"",true);
	xmlhttp.send();
	}