<?php

/**
 * Description of Club
 *
 * @author Tissot David
 */


//autoloader
/**/
include_once("model/Club.php");
include_once("model/Licence.php");
spl_autoload_extensions(".php");
spl_autoload_register();

//Classe Model récupérant les données de la BD
class ModelClub extends Model {

    //protected $_dbConnexion;

    public function __construct() {
        parent::__construct();
        $this->_dbConnexion = new Database('localhost', 'root', '', 'FFBSQ');
    
    }

    public function get($id) {
        $listClubs = $this->getAll();
        foreach ($listClubs as $club) {
            if ($club->getId() == $id) {
                return $club;
            }
        }
    }

    public function getAll() {
        $listClubs = array();
        $clubs = $this->_dbConnexion->requete("SELECT * FROM Club");
        $licences = $this->_dbConnexion->requete("SELECT * FROM Licence");
        foreach ($clubs as $club) {
            $tempClub = new Club($club->id, $club->nom, $club->adresse, $club->email);
            foreach ($licences as $licence) {
                if ($licence->idClub == $tempClub->getId()) {
                    $tempClub->ajouterLicence(new Licence($licence->numero, $licence->nomResp, $licence->prenomResp, $licence->idClub));
                }
            }
            array_push($listClubs, $tempClub);
        }
        return $listClubs;
    }

    public function add($nom, $adresse, $email) {
        $this->_dbConnexion->reqUpdate("INSERT INTO club(nom, adresse, email) values('". $nom . "', '". $adresse . "', '". $email . "');");
    }

}

