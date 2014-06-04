<?php
/*
require_once "../../Modelo/Livro.php";
require_once "../../Dao/LivroDao.php";
require_once "../../Utilidades/ValidaDados.php";
require_once "../../Utilidades/ExcessaoNomeInvalido.php";
require_once "../../Utilidades/ExcessaoTituloInvalido.php";
require_once "../../Utilidades/ExcessaoEditoraInvalida.php";
require_once "../../Utilidades/ConexaoComBanco.php";
*/

include_once("/../../model/Referee.php");
include_once("/../../persistence/RefereeDAO.php");
include_once("/../../persistence/Connection.php");

class RefereeDAOTest extends PHPUnit_Framework_TestCase {
    
    protected function setUp() {
        $this->refereeTest = new Referee(2, 'Joao Silva', '(11)1234-5678', '111.111.111-11');
        $this->refereeDaoTest = new RefereeDAO();
    }

    protected function tearDown() {
        unset($this->refereeDaoTest);
        unset($this->refereeTest);
        
    }

    public function testInsertReferee() {
        $retorno = $this->refereeDaoTest->insertReferee($this->refereeTest);
        $this->assertTrue($retorno);
    }
    
    
}
