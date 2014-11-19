<?php
//
	require_once(__DIR__ . "/../model/config.php");//requires a file requires a file onec
//__dir__ checks the directory for model
        //runs if there is a connection error
        if($connection->connect_error) {
            
            die("<p>Error: " .$connection->connect_error."</p>");
        }
        $exists = $connection->select_db($database);
        	//!exists runs if database does not exist
        if(!$exists) {
            $query = $connection->query("CREATE DATABASE $database"); 

            //$query is like a question 
            if($query){

            	echo "<p>successfully created database: " . $database . "</p>";

            }
            
        }
        //only runs if you already have an existing database
        else{

            	echo "<p>Database already exists.</p>";
            }

            //creates table in blog database
             $query = $connection->query("CREATE TABLE posts ("
                ."id int(11) Not NULL AUTO_INCREMENT,"
             	."title varchar(255) NOT NULL,"
                ."post text NOT NULL,"
                ."PRIMARY KEY (id))");
             
             if($query){
                 
                 echo "<p>Successfully created tabele: posts</P> ";
             }
             else{
                 echo "<P>$connection->error</p>";
             }

        

        	

        $connection->close();

