<?php
require_once(__DIR__ . "/../model/config.php");
//creates a query that connects to the database

//sanitizes $title and $post
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
$date = new DateTime('today');
$time = new DateTime('America/Los_Angeles');
//inserts the values of title and post in the table post
$query = $_SESSION{"connection"}->query("INSERT INTO posts SET title = '$title',post = '$post' ");

if($query){
	//runs if query is true
	echo "<p>Successfully inserted post: $title </p>";
	echo "Posted on:" . $date->format("M/d/Y") . " at " .$time->format("g:i");
}

else{
	//runs if query is true
	 echo "<P>" . $_SESSION{"connection"}->error . "</p>";

}
  




