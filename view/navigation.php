<?php
//requires the $path
require_once(__DIR__ . "/../model/config.php");
?>
<nav>
    <ul>
     <!--$path is the path to our localhost--> 
    <!--blog represents our localhost--> 
        <li><a href="<?php echo $path ."post.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>