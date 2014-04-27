<?php

/*
    Name: CoachController.php
    Description: Class responsible for inserting, deleting,
    changing a manager in addition to making an appointment for a technician already registered.
*/
include_once(__APP_PATH . '/persistence/CoachDAO.php');
include_once(__APP_PATH . '/model/Coach.php');

class CoachController {

    private $coachDAO;

    public function __construct(){
        $this->coachDAO = new CoachDAO();
    }

    /*
        Function responsible for selecting the technical data in the table.
    */
    public function _listCoachesForSelect(){
        $coachData = new Coach();
        $arrayCoachData = $this->coachDAO->listAllCoaches();
        for ($i = 0; $i < count($arrayCoachData); $i++) {
            $coachData = $arrayCoachData[$i];
            $arraySelect[] = "<option value=\"" . $coachData->__getIdCoach() . "\">"
                    . $coachData->__getCoachName() . "</option>";
        }
        return $arraySelect;
    }

    /*
        List the function responsible for the technical data in the table.
     */
    public function _listAllCoachesForTable(){
        $coachData = new Coach();
        $arrayCoachData = $this->coachDAO->listAllCoaches();
        for ($i = 0; $i < count($arrayCoachData); $i++){
            $coachData = $arrayCoachData[$i];
            $htmlDataFromCoach[] = " 
			<tr>
                            <td><input type=\"checkbox\" value=\"1\" name=\"marcar[]\" /></td>
				<td>" . $coachData->__getIdCoach() . "</td>
          			<td>" . $coachData->__getCoachName() . "</td>
          			<td>" . $coachData->__getCoachPhone() . "</td>
          			<td>" . $coachData->__getCoachCpf() . "</td>
          			<td>
            			<a href=\"?pag=tecnico&action=edit&id=" . 
                                           $coachData->__getIdCoach() .
                        "\"><img src=\"./views/images/edit.png\" width=\"16\" height=\"16\" /></a>
            			<a href=\"?pag=tecnico&action=exclude&id=" . 
                                           $coachData->__getIdCoach() . 
                        "\"><img src=\"./views/images/delete.png\" width=\"16\" height=\"16\" /></a>
          			</td>
                    </tr>";
        }
        return $htmlDataFromCoach;
    }

    /*
        Function responsible for performing a query by ID.
    */
    public function _consultByIdCoach($id){
        $coachData = new Coach();
        $coachData = $this->coachDAO->consultByIdCoach($id);
        $arrayData['coachName'] = $coachData->__getCoachName();
        $arrayData['coachPhone'] = $coachData->__getCoachPhone();
        $arrayData['coachCpf'] = $coachData->__getCoachCpf();

        return $arrayData;
    }

    /*
        Function responsible for performing a query by name.
     */
    public function _consultByCoachName($coachName){
        return $this->coachDAO->consultByCoachName($coachName);
    }

    /*
        Function responsible for saving the data of a new techical already registered.
     */
    public function _saveCoach($coachName, $coachPhone, $coachCpf){
        $coachData = new Coach();
        $coachData->__constructOverload(0, $coachName, $coachPhone, $coachCpf);
        $this->coachDAO->insertCoach($coachData);
    }

    /*
        Function responsible for updating the data of technical.
    */
    public function _updateCoach($idCoach, $coachName, $coachPhone, $coachCpf){
        $coachData = new Coach();
        $coachData->__constructOverload($idCoach, $coachName, $coachPhone, $coachCpf);
        $this->coachDAO->updateCoach($coachData);
    }

    /*
        Function responsible for deleting the data on technical.
     */

    public function _deleteCoach($id){
        return $this->coachDAO->deleteCoach($id);
    }

    /*
        Function responsible for counting how many records technicians.
    */
    public function _amountCoachesRecords(){
        return $this->coachDAO->amountCoachesRecords();
    }
}
