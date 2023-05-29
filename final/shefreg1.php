<!doctype html>
<html>
<head>
<title>shef registration</title>
<link href="shefreg.css" rel="stylesheet"/>
</head>
<body>
  <div class="top">
    <img src="logo.png"/>
    <div class="nav-div">
     <ul class="nav">
        <li><a href="#">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="registration.php">Register</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="#">contact us</a></li>
      </ul>
   </div>

  <div class="main">
  <div class="form">
<form method="POST" action="#">
<table>
<tr><td><label>Email:</label></td></tr>
<tr><td><input type="email" name="email" class="fields" placeholder="type your email here..." autocomplete="off"/></td></tr>
<tr><td><label>Password:</label></td></tr>
<tr><td><input type="password" name="pname" class="fields" placeholder="password..."></td></tr>
<tr><td><label>type:</label></td></tr>
<tr><td><input type="text" name="type" class="fields" placeholder="type..."></td></tr>


<tr><td><input type="submit" name="shefreg" id="btn" value="register"/></td></tr>
</table>
</form>

<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=$_POST['email'];
$password=$_POST['pname'];
$type=$_POST['type'];




$sql="INSERT INTO multiuser(email,password,type)VALUES('$email','$password','$type');";
mysqli_select_db($conn,'receipe');
$ret=mysqli_query($conn,$sql);
if(!$ret){
echo "aliseram".mysqli_error($conn);
}
}
?>



</body>

</html>
