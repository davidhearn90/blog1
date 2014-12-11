<?php
require_once(__DIR__ . "/../model/config.php");

function authenticateUser(){
	if (!isset($_SESSION["authenticate"])){
		
		return false;
	}
	else{
		if (($_SESSION["authenticate"] != true)){
		
		return false;
	}
		else{

		return true;
		}

	}
	
}
 