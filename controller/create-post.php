<?php
require_once(__DIR__ . "/../model/database.php");
//creates a query that connects to the database
$connection = new mysqli($host, $username, $password, $database);

//sanitizes $title and $post
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//inserts the values of title and post in the table post
$query = $connection->query("INSERT INTO posts SET title = '$title',post = '$post' ");

if($query){
	//runs if query is true
	echo "<p>Successfully inserted post: $title </p>";
}

else{
	//runs if query is true
	echo "<p> $connection->error </p>";

}
  $connection->close();




