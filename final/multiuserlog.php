<html>
<head>

<title>Multi User Login</title>
<link href="multi.css" rel="stylesheet"/>
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

<div class="login">
<form method="POST"/>
<table>
<tr>
<td>Email</td>
<td><input type="email" name="email" class="fields"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" class="fields"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" id="btn" value="login"></td>
</tr>
</table>

</form>
</div>
<?php
include('connection.php');
session_start();
mysqli_select_db($conn,'receipe');
if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM multiuser WHERE email='$email' and password='$password';";
  $result=mysqli_query($conn, $sql);
  if(!$result)
  mysqli_error($conn);
  while($row=mysqli_fetch_array($result)){
     if($row['email']==$email && $row['password']==$password){
       	$_SESSION['e']=$_POST['email'];
       header('location:admin.php');
     }else{
       header('location:multiuserlog.php');
     }

  }
}

 ?>
</body>

</html>
