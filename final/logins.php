<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])){

  $email= $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT count(*) as total FROM `reg` WHERE email = '".$email."' AND password = '".$password."' ";
  mysqli_select_db($conn,'receipe');
  $result =mysqli_query($conn,$sql);

  if($result->num_rows > 0){
    $_SESSION['email'] = $email;
    header("location:logaction.php");
    die;
  }

}
?>
<form method="post">
	<input  type="email" name="email" placeholder="email" >
	<input  type="password" name="password"  placeholder="password">
	<input type="submit" name="submit" value="Login">
</form>
