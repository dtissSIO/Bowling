<?php
include_once("model/Model.php");

Abstract Class Controller {
		
	public abstract function __construct();

	public abstract function invoke();

}

?>