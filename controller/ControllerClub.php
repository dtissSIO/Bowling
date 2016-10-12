<?php

include_once("model/ModelClub.php");

class ControllerClub extends Controller {

    public $_modelClub;

    public function __construct() {
        $this->_modelClub = new ModelClub();
    }

    public function invoke() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "clubs":
                    $clubs = $this->_modelClub->getAll();
                    include 'view/listeClubs.php';
                    break;
                case "club":
                    $club = $this->_modelClub->get($_GET['id']);
                    include 'view/listeLicence.php';
                    break;
                case "ajouter":
                    $this->_modelClub->add($_POST['nom'], $_POST['adresse'], $_POST['email']);
                    $clubs = $this->_modelClub->getAll();
                    include 'view/listeClubs.php';
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