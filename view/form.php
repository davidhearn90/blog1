<?php
require_once(__DIR__ . "/../model/config.php");


?>

<h1>Create Blog Post</h1>

<!-- sends information to create post -->
<form method="post" action="<?php echo $path ."controller/create-post.php" ?>">
    <div>
        <label for="title">Title: </label>
        <!--input only works on one line-->
        <input type="text" name="title" />
    </div>
    
    
    <div>
        <label for="post">Post: </label>
        <!--text area can cover multiple lines and and can be expanded  -->
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>