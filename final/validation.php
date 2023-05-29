<?php
session_start();
include('connection.php');
mysqli_select_db($conn,'receipe');
if(isset($_POST['email'])){
$email=$_POST['email'];
$pass=$_POST['pname'];

 $sql="select *from reg  where email='".$email."' password='".$pass."'limit 1";
 $result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if(num=1){
  $_SESSION['email'] =$email;
header('location:home.php');
}
else{
  header('location:login.php');
}
}
?>
