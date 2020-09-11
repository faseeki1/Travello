
<?php session_start();?>
<?php
$connect = mysqli_connect("localhost","root","","travello");	
?>
<?php ob_start();?>

<?php

if(isset($_SESSION["id"])){
    $profile_id = $_SESSION["id"];
    $profile_dets = mysqli_query($connect, "SELECT * FROM users WHERE id = $profile_id");
    while($profile_row = mysqli_fetch_assoc($profile_dets)){
        $profile_username = $profile_row["username"];
        $profile_firstname = $profile_row["firstname"];
        $profile_lastname = $profile_row["lastname"];
        $profile_email = $profile_row["email"];
        $profile_last_login = $profile_row["last_login"];
    }
}else{
    header("Location: ../");
}

?>