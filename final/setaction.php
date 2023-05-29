<?php
include('connection.php');
mysqli_select_db($conn,'receipe');
if(!isset($_POST['set'])){
$email=$_POST['email'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$pass=$_POST['password'];
$cpass=$_POST['cpass'];
$sql="UPDATE reg set firstname='$fname', lastname='$lname',password='$pass',cpass='$cpass' WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if($result){

  echo "successfull";
  header('location:fetch.php');
}
else{
  echo "not";
}
}

 ?>
