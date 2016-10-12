<?php

/**
 * Description of Club
 *
 * @author Tissot David
 */


//autoloader
/**/
spl_autoload_extensions(".php");
spl_autoload_register();

//Classe Model récupérant les données de la BD
Abstract Class Model {

    protected $_dbConnexion;

    public function __construct() {
        $this->_dbConnexion = new Database('localhost', 'root', '', 'FFBSQ');
    }
    
    public abstract function getAll();
    public abstract function get($id);
  
   }

?>