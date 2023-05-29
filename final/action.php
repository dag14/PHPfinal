<?php
session_start();
if(isset($_GET['delete'])){
$email=$_GET['delete'];
$sql="DELETE FROM reg where email=$email;";
mysqli_query($sql); 
$_SESSION['message']="record has been deleted";
$_SESSION['msg_type']="danger";
header('location:mukera.php');
}


?>
