<?php 
session_start();

if($_SESSION["name"]){
    session_unset();
    header("Refresh:0;url=http://localhost/Testing/three.php");
}

?>