<?php
//requires the $path
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");
if(!authenticateUser()){
    header("Location: " . $path . "index.php");
    die();
}
?>
<nav>
    <ul>
     <!--$path is the path to our localhost--> 
    <!--blog represents our localhost--> 
        <li><a href="<?php echo $path ."post.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>