<?php session_start();?>
<?php
$connect = mysqli_connect("localhost","root","","travello");	
?>
<?php ob_start();?>

<?php


$_SESSION["username"] = NULL;
$_SESSION["id"] = NULL; 
$_SESSION["firstname"] = NULL; 
$_SESSION["lastname"] = NULL;
$_SESSION["email"] = NULL; 

header("Location: ../")

?>