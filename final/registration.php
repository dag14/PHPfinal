<!doctype html>
<html>
 <head>
 <title>Registartion</title>
 <link href="registration.css" rel="stylesheet"/>
 <script src="reg.js" type="text/javascript"></script>
 </head>
 <body>
<div class="registration">
  <h1>Register here</h1>
 <form name="reg" method="post">

  <table>
  <tr><td><label>Firstname:</label></td></tr>
  <tr><td><input type="text" name="fname" class="fields" placeholder="type your first name" ></td></tr>
  <tr><tr><td><label>Lastname:</label></td></tr>
  <tr><td><input type="text" name="lname" class="fields" placeholder="type your last name" ></td></tr>
  <tr><td><label>Password:</label></td></tr>
  <tr><td><input type="password" name="pname" class="fields" placeholder="type your password"></td></tr>
  <tr><td><label>Confirm Password:</label></td></tr>
  <tr><td><input type="password" name="cpname" class="fields" placeholder="confirm your password"></td></tr>
  <tr><tr><td><label>Email:</label></td></tr>
  <tr><td><input type="email" name="email" class="fields" placeholder="type your email here" autocomplete="off"></td></tr>
  <tr><tr><td><label>Gender:</label></td></tr>
  <tr><td><label>Male:</label><input type="radio" name="sex" value="male"></td>
  <td><label>Female:</label><input type="radio" name="sex" value="female"></td></tr>
  <tr><tr><td><label>I am:</label></td></tr>
  <tr><td><label>Vegan:</label><input type="radio" name="vegan" value="vegan"></td>
  <td><label>Non Vegan:</label><input type="radio" name="vegan" value="non_vegan"></td></tr>
  <tr><tr><td><label>I am:</label></td></tr>
  <tr><td><label>Diabetic:</label><input type="radio" name="diabetic" value="diabetic"></td>
  <td><label>Normal:</label><input type="radio" name="diabetic" value="normal"></td></tr>
  <tr><tr><td><label>I would like to:</label></td></tr>
  <tr><td><label>lose weight:</label><input type="radio" name="weight_loss" value="lose_weight"></td>
  <td><label>gain weight:</label><input type="radio" name="weight_loss" value="gain"></td></tr>
  <tr><td><input type="submit" onclick="check()" value="Register" name="login" id="btn"></td></tr>
 </table>
</div>
</form>
<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$password=$_POST['pname'];
$confirmpass=$_POST['cpname'];
$email=$_POST['email'];
$gender=$_POST['sex'];
$veg=$_POST['vegan'];
$diabet=$_POST['diabetic'];
$weight=$_POST['weight_loss'];



$sql="INSERT INTO reg(firstname,lastname,password,cpass,email,sex,vegan,diabetic,weight)VALUES('$firstname','$lastname','$password','$confirmpass','$email','$gender','$veg','$diabet','$weight')";
mysqli_select_db($conn,'receipe');
$ret=mysqli_query($conn,$sql);
if(!$ret){
echo "not successfull".mysqli_error($conn);
}else{
echo "successfull";}
}
?>


 </body>
</html>
