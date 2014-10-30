<?php

	require_once(__DIR__ . "/../model/database.php");//requires a file requires a file onec
//__dir__ checks the directory for model
	$connection = new mysqli($host, $username, $password);//connects the databae variables
        //runs if there is a connection error
        if($connection->connect_error) {
            
            die("Error: " .$connection->connect_error);
        }
        $exists = $connection->select_db($database);
        	//!exists runs if database does not exist
        if(!$exists) {
            $query = $connection->query("CREATE DATABASE $database"); 

            //$querry is like a question 
            if($query){

            	echo "successfully created database: " . $database;

            }
            
        }
        //only runs if you already have an existing database
        else{

            	echo "Database already exists.";
            }

            //creates table in blog database
             $query = $connection->query("CREATE TABLE posts ("
             	."id int(11) Not NULL AUTO_INCEMENT,"
             	."title varchart(255) NOT NULL",
             	."post text NOT NULL,"
             	."PRIMARY KEY (id)"); 

        

        	

        $connection->close();

