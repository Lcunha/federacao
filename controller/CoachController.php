<?php

/*
    Name: CoachController.php
    Description: Class responsible for inserting, deleting, changing a manager in addition 
    to making an appointment for a coach already registered.
*/
include_once(__APP_PATH . '/persistence/CoachDAO.php');
include_once(__APP_PATH . '/model/Coach.php');

class CoachController {

    private $coachDAO;

    public function __construct(){
        $this->coachDAO = new CoachDAO();
    }

    /*
        Function responsible for selecting the coach data in the table.
        It has no input parameter and returns an array with all the data of selected coach.
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
        The function has no input parameter and returns an array called tr with all data selected coach.
        List the function responsible for the coach data in the table.
     */
    public function _listAllCoachesForTable(){
        $coachData = new Coach();
        $arrayCoachData = $this->coachDAO->listAllCoaches();
        for ($i = 0; $i < count($arrayCoachData); $i++){
            $coachData = $arrayCoachData[$i];
            $tr[] = " 
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
        return $tr;
    }

    /*
        The function receives as input parameter the id of a particular coach and return an array with all the 
        data the coach identified by this id. 
        The query function to another function of the class coachDAO that queries such data in the database. 
        Function responsible for performing a query by ID.
    */
    public function _consultByIdCoach($idCoach){
        $coachData = new Coach();
        $coachData = $this->coachDAO->consultByIdCoach($idCoach);
        $arrayData['coachName'] = $coachData->__getCoachName();
        $arrayData['coachPhone'] = $coachData->__getCoachPhone();
        $arrayData['coachCpf'] = $coachData->__getCoachCpf();

        return $arrayData;
    }

    /*
        Function responsible for performing a query by name.
        The function receives as input parameter the name of a 
        coach and class return calls another function that returns the coachDAO 
        class consulting a coach returning your data.
     */
    public function _consultByCoachName($coachName){
        return $this->coachDAO->consultByCoachName($coachName);
    }

    /*
        Function responsible for saving the data of a new coach already registered.
        The function receives as input parameter the name of a coach your phone and 
        your ID, saving the system. The function has no return.
     */
    public function _saveCoach($coachName, $coachPhone, $coachCpf){
        $coachData = new Coach();
        $coachData->__constructOverload(0, $coachName, $coachPhone, $coachCpf);
        $this->coachDAO->insertCoach($coachData);
    }

    /*
        Function responsible for updating the data of coach.
        The function receives as input parameter the name of a coach 
        your phone and your ID, your id and updating all the data entering as parameter 
        of the function in the database. The function has no return.
    */
    public function _updateCoach($idCoach, $coachName, $coachPhone, $coachCpf){
        $coachData = new Coach();
        $coachData->__constructOverload($idCoach, $coachName, $coachPhone, $coachCpf);
        $this->coachDAO->updateCoach($coachData);
    }

    /*
        Function responsible for deleting the data on coach.
        The function receives as input parameter hi a coach. 
        The return of this function is responsible for deleting the data in that coach database.
    */
    public function _deleteCoach($idCoach){
        return $this->coachDAO->deleteCoach($idCoach);
    }

    /*
        Function responsible for counting how many coaches records.
        The function has no input parameter and returns the number 
        of coaches registered in the system.
    */
    public function _amountCoachesRecords(){
        return $this->coachDAO->amountCoachesRecords();
    }
}
