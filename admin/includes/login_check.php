
<?php session_start();?>
<?php
$connect = mysqli_connect("localhost","root","","travello");	
?>
<?php ob_start();?>
<?php
    if(!isset($_SESSION["admin"])){
        header("Location: ../");
    }


    $count_unread_mssg = mysqli_query($connect,"SELECT * FROM messages WHERE status='unread'");
    $count_unread_mssg_num = mysqli_num_rows($count_unread_mssg);
?>

