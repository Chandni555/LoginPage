<?php 
session_start();
if($_SESSION["name"]==""){
    header("Location:http://localhost/Testing/index.php");

}
?>
<h1>Welcome<?php echo $_SESSION["name"];?></h1>
<a href="End.php">Logout</a>
