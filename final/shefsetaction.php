<?php
include('connection.php');
mysqli_select_db($conn,'receipe');
if(!isset($_POST['set'])){
$Id=$_POST['Id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpass'];
$sql="UPDATE shefreg set firstname='$fname', lastname='$lname',password='$pass',cpass='$cpass',email='$email' WHERE Id='$Id';";
$result=mysqli_query($conn,$sql);
if($result){

  echo "successfull";
  header('location:sheffetch.php');
}
else{
  echo "not";
}
}

 ?>
