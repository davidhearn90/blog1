<?php
//
	require_once(__DIR__ . "/../model/config.php");//requires a file requires a file onec
//__dir__ checks the directory for model
	

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

        

        	

        

