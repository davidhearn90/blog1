<?php
require_once(__DIR__ . "/../model/database.php");
//creates a query yhat connects to the database
$connection = new mysqli($host, $username, $password, $database);

//sanitizes $title and $post
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//echos title and post
echo"<p>Title: $title</p>";
echo"<p>Post: $post</p>";

  $connection->close();



