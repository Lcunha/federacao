<script src="./views/contadorGols/contador.js"></script>

<input id="acrescenta"class="but but-cron" type="button" value="GOL!" onclick="contGol = acrescentarGol(contGol);">
<input id="decrementa"class="but but-cron" type="button" value="retirar gol" onclick="contGol = decrementarGol(contGol);">
<span id="gols">0 gols</span>