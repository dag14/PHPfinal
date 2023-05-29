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
<tr><td><label>Firstname:</label></td></tr>
<tr><td><input type="text" name="fname" class="fields" placeholder="firstname....."/></td></tr>
<tr><td><label>lastname:</label></td></tr>
<tr><td><input type="text" name="lname" class="fields" placeholder="lastname...."/></td></tr>
<tr><td><label>Email:</label></td></tr>
<tr><td><input type="email" name="email" class="fields" placeholder="type your email here..." autocomplete="off"/></td></tr>
<tr><td><label>Password:</label></td></tr>
<tr><td><input type="password" name="pname" class="fields" placeholder="password..."></td></tr>
<tr><td><label>Confirm Password:</label></td></tr>
<tr><td><input type="password" name="cpname" class="fields" placeholder="password..."></td></tr>
<tr><td><label>Gender:</label></td></tr>
<tr><td><label>Male:</label><input type="radio" name="sex" value="male"></td>
<td><label>Female:</label><input type="radio" name="sex" value="female"></td></tr>

<tr><td><input type="submit" name="shefreg" id="btn" value="register"/></td></tr>
</table>
</form>

<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pname'];
$confirmpass=$_POST['cpname'];
$gender=$_POST['sex'];



$sql="INSERT INTO shefreg(firstname,lastname,email,password,cpass,sex)VALUES('$firstname','$lastname','$email','$password','$confirmpass','$gender');";
mysqli_select_db($conn,'receipe');
$ret=mysqli_query($conn,$sql);
if(!$ret){
echo "aliseram".mysqli_error($ret);
}else{
echo "successfull";
header('location:admin.php');
}
}
?>



</body>

</html>
