<?php

session_start();

include('connection.php');
mysqli_select_db($conn,'receipe');


$email=$_POST['email'];
$pass=$_POST['pname'];

$q="select * from reg where email='$email'&&password='$pass'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
if($num==1){
 $_SESSION['email']=$email;
	header('location:usertry.php');
}
else{
	header('location:login.php');
	echo "invalid";
}
?>
