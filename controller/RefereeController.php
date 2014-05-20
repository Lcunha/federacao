<?php
/*
    Name: RefereeController.php
    Description:Class that performs the listing of teams and games
    already registered in the system in a table may delete, edit, update and save.
 */
include_once(__APP_PATH . '/persistence/RefereeDAO.php');
include_once(__APP_PATH . '/model/Referee.php');

class RefereeController {

    private $refereeDAO;

    public function __construct(){
        $this->refereeDAO = new RefereeDAO();
    }

    /*
        Function responsible for taking the data registered by the referee system 
        and store the information in a vector.The function has no input parameter and 
        performs a query on the database of all registered in the system in a table referees, 
        has as return an array with all the data of registered referees.
     */
    public function _listAllRefereesForTables(){
        $dataReferee = new Referee();
        $arrayRefereeData = $this->refereeDAO->listAllReferees();
        for ($i = 0; $i < count($arrayRefereeData); $i++){
            $dataReferee = $arrayRefereeData[$i];
            $htmlDataReferees[] = "
			<tr>
          			<td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
					<td>" . $dataReferee->__getIdReferee() . "</td>
          			<td>" . $dataReferee->__getRefereeName() . "</td>
          			<td>" . $dataReferee->__getRefereePhone() . "</td>
          			<td>" . $dataReferee->__getRefereeCpf() . "</td>
          			<td>
            			<a href=\"?pag=arbitro&action=edit&id=" . $dataReferee->__getIdReferee() . "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=arbitro&action=exclude&id=" . $dataReferee->__getIdReferee() . "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
			</tr>";
        }
        return $htmlDataReferees;
    }

    /*
        Responsible function to list all registered referees.
        The function has no input parameter and returns the data of all referees 
        registered in the database alert function listAllReferees found on refereesDAO class.
     */
    public function _listAllReferees(){
        return $this->refereeDAO->listAllReferees();
    }

    /*
        Responsible for querying the data of a referee from the id function 
        entered by User
    */
    public function _consultByIdReferee($idReferee){
        $dataReferee = new Referee();
        $dataReferee = $this->refereeDAO->consultByIdReferee($idReferee);
        $arrayRefereeData['refereeName'] = $dataReferee->__getRefereeName();
        $arrayRefereeData['refereePhone'] = $dataReferee->__getRefereePhone();
        $arrayRefereeData['refereeCpf'] = $dataReferee->__getRefereeCpf();

        return $arrayRefereeData;
    }

    /*
        Function responsible for performing a query by name.
    */
    public function _consultByRefereeName($refereeName){
        return $this->refereeDAO->consultByRefereeName($refereeName);
    }

    /*
        Responsible for calling the function of insertion of a new
        arbitrator in the table by calling the function insert function in 
        existing class ArbitroDAO.php
     */
    public function _insertReferee(Referee $referee){
        return $this->refereeDAO->insertReferee($referee);
    }

    /*
        Responsible function to modify data already a registered referee.
    */
    public function _updateReferee($idReferee, $refereeName, $refereePhone, $refereeCpf){
        $dataReferee = new Referee();
        $dataReferee->__constructOverload($idReferee, $refereeName, $refereePhone, $refereeCpf);
        $this->refereeDAO->updateReferee($dataReferee);
    }

    /*
        Function responsible for saving the data of a new arbitrator already 
        registered.
     */
    public function _saveReferee($refereeName, $refereePhone, $refereeCpf){
        $dataReferee = new Referee();
        $dataReferee->__constructOverload(0, $refereeName, $refereePhone, $refereeCpf);
        $this->refereeDAO->insertReferee($dataReferee);
    }

    /*
       Responsible function to delete data from an already registered referee.
    */
    public function _deleteReferee($idReferee){
        return $this->refereeDAO->deleteReferee($idReferee);
    }

    /*
        Function responsible for telling how many arbitrators have already been 
        registered.
     */
    public function _amountRefereesRecords(){
        return $this->refereeDAO->amountRefereesRecords();
    }

}