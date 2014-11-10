<?php
//sanitizes $title and $post
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//echos title and post
echo"<p>Title: $title</p>";
echo"<p>Post: $post</p>";


