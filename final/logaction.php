<?php

session_start();
if($_SESSION['email']){
echo "Welcome user " . $_SESSION["email"];
}else{
    header("location:loginad.php");
}

?>

<a href="logouts.php">LogOut</a>
