<?php
include('connection.php');
session_start();

mysqli_select_db($conn,'receipe');


$email=$_POST['email'];
$pass=$_POST['pname'];
$type=$_POST['type'];

$q="select * from reg where email='$email'&&password='$pass' && diabetic='$type'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
$type1="diabetic";
$type2="normal";
if($num==1){
  if(strcmp($type,$type1)==0){
		$_SESSION['d']=$_POST['email'];
	header('location:usertype.php');
}
elseif (strcmp($type,$type2)==0) {
	$_SESSION['d']=$_POST['email'];
	header('location:usertype1.php');
}
}
else{
	echo "invalid".mysqli_error('$num');
	header('location:logintype.php');

}
?>
