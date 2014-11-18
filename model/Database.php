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
	$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
	 //runs if there is a connection error
	 if($this->connection->connect_error) {
            
            die("<p>Error: " .$this->connection->connect_error."</p>");
        }

}
//closes connection
public function closeConnection(){
	//checks weatther you open the connection or not
	//isset checks if the variable is set
	if(isset($this->connection)){
		$this->connection->close();
	};

}

public function query($string){

}
	
}