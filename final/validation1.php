<?php
include('connection.php');
session_start();

mysqli_select_db($conn,'receipe');


$email=$_POST['email'];
$pass=$_POST['pname'];

$q="select * from reg where email='$email'&&password='$pass'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['d']=$_POST['email'];
	header('location:user.php');
}
else{
	header('location:login.php');
	echo "invalid".mysqli_error('$num');
}
?>
