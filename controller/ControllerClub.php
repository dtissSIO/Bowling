<?php

include_once("model/Model.php");

class ControllerClub extends Controller {

    public $_model;

    public function __construct() {
        $this->_model = new Model();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "clubs":
                    $clubs = $this->_model->getClubList();
                    include 'view/listeClubs.php';
                    break;
                case "club":
                    $club = $this->_model->getClub($_GET['club']);
                    include 'view/listeLicence.php';
                    break;
                default:
                    echo "Erreur";
            }
        } else {
            header('Location: index.php');
            exit;
           
        }
    }
    
    

}

?>