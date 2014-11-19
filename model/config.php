<?php
$path = "/blog/";

//$host stores host name of our server
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

//creates new object that will be stored in connection
$connection = new Database($host, $username, $password, $database);
