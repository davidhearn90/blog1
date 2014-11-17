<?php
//creates your own object so you can call these functions easier
class Database{
//private so other files can't access it
private $connection;
private $host;
private $username;
private $password;
private $database;
//assigns information to the global variables
public function __construct($host, $username, $password, $database){
	$this->host = $host;
	$this->host = $username;
	$this->host = $password;
	$this->host = $database;

}
//opens connection
public function openConnection(){

}
//closes connection
public function closeConnection(){

}

public function query($string){

}
	
}