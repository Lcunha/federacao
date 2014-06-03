F<?php
/*
    Name: PlayerController.php.
    Description: Inserts players already registered in the table, organizes the players to form a team.
    Query performs inserts, updates, and deletes saved data from players.
 */
include_once('/../persistence/PlayerDAO.php');
include_once('/../model/Player.php');

class PlayerController {

    private $playerDAO;

    public function __construct(){
        $this->playerDAO = new PlayerDAO();
    }

    /*
       Responsible function to list all the data for the registered players to be selected.
       The function has no input parameter. And returns an array with all 
       players registered in the database.
    */
    public function _listAllPlayersForSelect(){
        $playerData = new Player();
        $arrayPlayerData = $this->playerDAO->listAllPlayers();
        for ($i = 0; $i < count($arrayPlayerData); $i++) {
            $playerData = $arrayPlayerData[$i];
            $htmlOptionSelect[] = "<option value=\"" . $playerData->__getIdPlayer() . "\">" . 
            $playerData->__getPlayerName() . "</option>";
        }
        return $htmlOptionSelect;
    }

    /*
        Responsible function to list all player data in a table.
        The function has no input parameter. Stores all data of a 
        player in an array and returns this array with data.
    */
    public function _listAllPlayersAllTables(){
        $playerData = new Player();
        $arrayPlayerData = $this->playerDAO->listAllPlayers();
        for ($i = 0; $i < count($arrayPlayerData); $i++) {
            $playerData = $arrayPlayerData[$i];
            $tr[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $playerData->__getIdPlayer() . "</td>
          			<td>" . $playerData->__getIdTeam() . "</td>
          			<td>" . $playerData->__getPlayerName() . "</td>
          			<td>" . $playerData->__getBirthDatePlayer() . "</td>
          			<td>" . $playerData->__getCpfPlayer() . "</td>
          			<td>" . $playerData->__getPlayerNumber() . "</td>
          			<td>
            			<a href=\"?pag=player&action=edit&id=" . $playerData->__getIdPlayer() . 
                                "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=player&action=delete&id=" . $playerData->__getIdPlayer() . 
                                "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }

        return $tr;
    }

    /*
        Function responsible for taking all player data assembling a team.
        It lists all players contained in the database of players. And select players 
        to form a team, paramentro receives as input the id of the team and the id of a 
        player time.E returns an array that stores all this data.
    */
    public function _listAllPlayersForDocketTeamA($idTeam, $idTimePlay){
        $idPlayer[0] = -1;
        $playerData = new Player();
        $arrayPlayerData = $this->playerDAO->listAllPlayers();
        for ($i = 0; $i < count($arrayPlayerData); $i++){
            $playerData = $arrayPlayerData[$i];
            if ($playerData->__getIdTeam() == $idTeam){
                $playerOfTeam[] = $playerData;
            }
        }

        for ($i = 0; $i < count($playerOfTeam); $i++){
            $playerDataTime = $playerOfTeam[$i];
            $htmlTablePlayers[] = "
				
				<tr>
	          	<th>
				</th>
				<th class=\"tr\">" . $playerDataTime->__getPlayerNumber() . "</th>
				<th class=\"tr\">" . $playerDataTime->__getPlayerName() . "</th>
	            <th class=\"tr\" id =\"golPlayerTimeA$i\">0</th>
	            <script>var jogadorIdA$i = " . $playerDataTime->__getIdPlayer() . " </script>
	            <th>
	             	<script>var contGolTimeA$i = 0</script>
		            <input id=\"acrescentaGolA$i\" class=\"but but-gol \" type=\"button\"  
                                value=\"+\" onclick=\"contGolTimeA$i++;document.getElementById('golPlayerTimeA$i').
                                    innerHTML=contGolTimeA$i;timeGolsTimeA++;inserirGolTimeA(tempoAtual);persistirTempo
                                        (tempoAtual);persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,
                                            contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
					<input id=\"decrementaGolA$i\" 
                                           class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contGolTimeA$i--;timeGolsTimeA--;if(contGolTimeA$i<0){contGolTimeA$i++;timeGolsTimeA++;}document.getElementById('golPlayerTimeA$i').innerHTML=contGolTimeA$i;inserirGolTimeA(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
					
					</th></th>
		            <th class=\"tr\" id=\"jogadorATimeA$i\">0	
	            </th>
	            <th>
		            <script>var contATimeA$i = 0</script>
					<input id=\"acrescentaAA\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contATimeA$i++;document.getElementById('jogadorATimeA$i').innerHTML=contATimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
					<input id=\"decrementaAA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contATimeA$i--;if(contATimeA$i<0){contATimeA$i++;}document.getElementById('jogadorATimeA$i').innerHTML=contATimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\"></th>
	            	<th class=\"tr\" id=\"jogadorDoisMinutosTimeA$i\">0
	            </th>
		            <th><script>var contDoisMinutosTimeA$i = 0</script>
					<input id=\"acrescentaDoisA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDoisMinutosTimeA$i++;document.getElementById('jogadorDoisMinutosTimeA$i').innerHTML=contDoisMinutosTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
					<input id=\"decrementaDoisA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDoisMinutosTimeA$i--;if(contDoisMinutosTimeA$i<0){contDoisMinutosTimeA$i++;}document.getElementById('jogadorDoisMinutosTimeA$i').innerHTML=contDoisMinutosTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\"></th>
		            <th class=\"tr\" id=\"jogadorDTimeA$i\">0
	            </th>
	            <th>
		            <script>var contDTimeA$i = 0</script>
					<input id=\"acrescentaDA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDTimeA$i++;document.getElementById('jogadorDTimeA$i').innerHTML=contDTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
					<input id=\"decrementaDA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDTimeA$i--;if(contDTimeA$i<0){contDTimeA$i++;}document.getElementById('jogadorDTimeA$i').innerHTML=contDTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\"></th>
					<th class=\"tr\" id=\"jogadorDRTimeA$i\">0
				</th>
				<th><script>var contDRTimeA$i = 0</script>
				<input id=\"acrescentaDRA$i\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDRTimeA$i++;document.getElementById('jogadorDRTimeA$i').innerHTML=contDRTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
				<input id=\"decrementaDRA$i\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDRTimeA$i--;if(contDRTimeA$i<0){contDRTimeA$i++;}document.getElementById('jogadorDRTimeA$i').innerHTML=contDRTimeA$i;persistirDados(jogadorIdA$i,contGolTimeA$i,contATimeA$i,contDoisMinutosTimeA$i,contDTimeA$i,contDRTimeA$i," . $idTimePlay . ");\">
				</th>		
			</tr>";
        }

        return $htmlTablePlayers;
    }

    /*
        Function responsible for taking all registered players already and simulate a team with them.
        It lists all players contained in the data of the second team players. Paramentro receives 
        as input the id of the team and the id of a player time.E returns an array that stores all this data.
    */
    public function __listAllPlayersForDocketTeamB($idTeam, $idTimePlay){
        $idPlayer[0] = -1;
        $playerData = new Player();
        $arrayPlayerData = $this->playerDAO->listAllPlayers();
        for ($i = 0; $i < count($arrayPlayerData); $i++){
            $playerData = $arrayPlayerData[$i];
            if ($playerData->__getIdTeam() == $idTeam){
                $playerOfTeam[] = $playerData;
            }
        }

        for ($i = 0; $i < count($playerOfTeam); $i++){
            $playerDataTime = $playerOfTeam[$i];
            $htmlTablePlayers[] = "
				
				<tr>
	          	<th>
				</th>
				<th class=\"tr\">" . $playerDataTime->__getPlayerNumber() . "</th>
				<th class=\"tr\">" . $playerDataTime->__getPlayerName() . "</th>
				<script>var jogadorIdB$i = " . $playerDataTime->__getIdPlayer() . " </script>
					<th class=\"tr\" id =\"golPlayerTimeB$i\">0</th>
					<th>
					<script>var contGolTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contGolTimeB$i++;document.getElementById('golPlayerTimeB$i').innerHTML=contGolTimeB$i;timeGolsTimeB++;inserirGolTimeB(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contGolTimeB$i--;timeGolsTimeB--;if(contGolTimeB$i<0){contGolTimeB$i++;timeGolsTimeB++;}document.getElementById('golPlayerTimeB$i').innerHTML=contGolTimeB$i;inserirGolTimeB(tempoAtual);persistirTempo(tempoAtual);persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					</th></th>
					<th class=\"tr\" id=\"jogadorATimeB$i\">0
					</th>
					<th>
					<script>var contATimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contATimeB$i++;document.getElementById('jogadorATimeB$i').innerHTML=contATimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contATimeB$i--;if(contATimeB$i<0){contATimeB$i++;}document.getElementById('jogadorATimeB$i').innerHTML=contATimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\"></th>
					<th class=\"tr\" id=\"jogadorDoisMinutosTimeB$i\">0
					</th>
					<th><script>var contDoisMinutosTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDoisMinutosTimeB$i++;document.getElementById('jogadorDoisMinutosTimeB$i').innerHTML=contDoisMinutosTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDoisMinutosTimeB$i--;if(contDoisMinutosTimeB$i<0){contDoisMinutosTimeB$i++;}document.getElementById('jogadorDoisMinutosTimeB$i').innerHTML=contDoisMinutosTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\"></th>
					<th class=\"tr\" id=\"jogadorDTimeB$i\">0
					</th>
					<th>
					<script>var contDTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDTimeB$i++;document.getElementById('jogadorDTimeB$i').innerHTML=contDTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDTimeB$i--;if(contDTimeB$i<0){contDTimeB$i++;}document.getElementById('jogadorDTimeB$i').innerHTML=contDTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\"></th>
					<th class=\"tr\" id=\"jogadorDRTimeB$i\">0
					</th>
					<th><script>var contDRTimeB$i = 0</script>
					<input id=\"acrescenta\" class=\"but but-gol \" type=\"button\"  value=\"+\" onclick=\"contDRTimeB$i++;document.getElementById('jogadorDRTimeB$i').innerHTML=contDRTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					<input id=\"decrementa\" class=\"but but-retirarGol \" type=\"button\" value=\"-\" onclick=\"contDRTimeB$i--;if(contDRTimeB$i<0){contDRTimeB$i++;}document.getElementById('jogadorDRTimeB$i').innerHTML=contDRTimeB$i;persistirDados(jogadorIdB$i,contGolTimeB$i,contATimeB$i,contDoisMinutosTimeB$i,contDTimeB$i,contDRTimeB$i," . $idTimePlay . ");\">
					</th>
	
					</tr>";
        }

        return $htmlTablePlayers;
    }

    /*
        Function responsible for listing all players.
        It has no input parameter and returns a list of all the players that 
        have already been registered in the database, this list and returned through the 
        function listAllPlayer found on playerDAO class.
    */
    public function _listAllPlayers(){
        return $this->playerDAO->listAllPlayers();
    }

    /*
        Performs query a player from a selected id.
        Has as input parameter the variable that stores the id 
        of a player and holds an appointment at the bank through this database id, 
        the result of this query is stored in an array and the function returns this array.
    */
    public function _consultByIdPlayer($idPlayer){
        $playerData = new Player();
        $playerData = $this->playerDAO->consultByIdPlayer($idPlayer);
        $arrayDataPlayer['playerName'] = $playerData->__getPlayerName();
        $arrayDataPlayer['idTeam'] = $playerData->__getIdTeam();
        $arrayDataPlayer['birthDatePlayer'] = $playerData->__getBirthDatePlayer();
        $arrayDataPlayer['cpfPlayer'] = $playerData->__getCpfPlayer();
        $arrayDataPlayer['playerNumber'] = $playerData->__getPlayerNumber();

        return $arrayDataPlayer;
    }

    /*
        Performs query a player from a selected team.
        Has as input parameter the variable that stores the id of 
        a team, and queries for all teams registered in the database data through this id. 
        It returns the function call consultPlayerByIdTeam present in class playerDAO
    */
    public function _consultPlayerByIdTeam($idTeam){
        return $this->playerDAO->consultPlayerByIdTeam($idTeam);
    }

    /*
        Function that handles player data and makes the query their data using its name.
        Receives as input parameter the player's name and that name through query data that player in the database.
        Returns an array of all player data stored consulted.
    */
    public function _consultByPlayerName($playerName){
        $playerData = new Player();
        $playerData = $this->playerDAO->consultByPlayerName($playerName);
        $arrayDataPlayer['idTeam'] = $playerData->__getIdTeam();
        $arrayDataPlayer['birthDatePlayer'] = $playerData->__getBirthDatePlayer();
        $arrayDataPlayer['cpfPlayer'] = $playerData->__getCpfPlayer();
        $arrayDataPlayer['playerNumber'] = $playerData->__getPlayerNumber();

        return $arrayDataPlayer;
    }

    /*
        Function responsible for inserting a new player.
        Receives as input parameter data that player returns and the call of 
        insertPlayer function that is in playerDAO class.
    */
    public function _insertPlayer($playerData){
        return $this->playerDAO->insertPlayer($playerData);
    }

    /*
        Function responsible for updating embed player.
        Receives as parameter input all data from player to be upgraded, and they id team, player name,
        birth date player, cpf player, numer player. Sending all these data through updateplayer 
        function it updates all data contained in playerDAO class.
    */
    public function _updatePlayer($idPlayer, $idTeam, $playerName, $birthDatePlayer, $cpfPlayer, $playerNumer){
        $playerData = new Player();
        $playerData->__constructOverload($idPlayer, $idTeam, $playerName, $birthDatePlayer, $cpfPlayer, $playerNumer);
        $this->playerDAO->updatePlayer($playerData);
    }

    /*
        Function responsible for saving the data of a player.
        Receives as input parameter all player data to be saved in the 
        system as player name, team id, birth date player, cpf player, player number.Nao has no return.
    */
    public function _savePlayer($playerName, $idTeam, $birthDatePlayer, $cpfPlayer, $playerNumber){
        $playerData = new Player();
        $playerData->__constructOverload(0, $idTeam, $playerName, $birthDatePlayer, $cpfPlayer, $playerNumber);
        $this->playerDAO->insertPlayer($playerData);
    }

    /*
        Function responsible for deleting the data on game.
        Receives as input parameter the id that player will be excluded 
        from the system and delete all your data. Returns the function call which is in deletePlayer playerDAO class.
    */
    public function _deletePlayer($idPlayer){
        return $this->playerDAO->deletePlayer($idPlayer);
    }

    /*
        Function responsible for counting the records on how many players were registered.
        It has no input parameter and returns the function call amountPlayersRecords found on playerDAO class.
    */
    public function _amountPlayersRecords(){
        return $this->playerDAO->amountPlayersRecords();
    }

    /*
        Function that query on all data Gunners players present in classes.
        The function has no input parameter and performs a query on the database of 
        all registered in the system Gunners, has as return an array with all the data of registered gunners.
    */
    public function _listGunners(){
        $arrayDataGunner = $this->playerDAO->listGunners();
        for ($i = 0; $i < count($arrayDataGunner); $i++){
            $dataGunner = $arrayDataGunner[$i];
            $htmlLineDataGunners[] = "
			
			 <tr>
			 <th class=\"th-piqueno th-cor\">" . $dataGunner['playerNumber'] . "</th>
			 <th class=\"th-cor\">" . $dataGunner['playerName'] . "</th>
			                     <th class=\"th-cor\">" . $dataGunner['teamName'] . "</th>
			                     <th class=\"th-piqueno th-cor\">" . $dataGunner['amountGoals'] . "</th>
			                 </tr>";
        }
        return $htmlLineDataGunners;
    }

    /*
        Function that query on all data Gunners players present in classes.
        The function has no input parameter and performs a query on the database 
        of all players fear registered in the system, has to return an array with 
        all the data of registered players fear.
    */
    public function _listFearPlayers(){
        $arrayDataFearPlayers = $this->playerDAO->listFearPlayers();
        for ($i = 0; $i < count($arrayDataFearPlayers); $i++){
            $dataFearPlayer = $arrayDataFearPlayers[$i];
            $htmlLineDataFearPlayers[] = "
		
	           <tr>
	     <th class=\"th-piqueno th-cor\">" . $dataFearPlayer['playerNumber'] . "</th>
	 <th class=\"th-cor\">" . $dataFearPlayer['playerName'] . "</th>
		    <th class=\"th-cor\">" . $dataFearPlayer['teamName'] . "</th>
		           <th class=\"th-piqueno th-cor\">" . $dataFearPlayer['amountPenalty'] . "</th>
		       </tr>";
        }
        return $htmlLineDataFearPlayers;
    }

}