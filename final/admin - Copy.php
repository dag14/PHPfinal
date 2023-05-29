<?php

include('connection.php');
?>
<!doctype html>
<html>
 <head>
   <title>about</title>
   <link href="admin.css" rel="stylesheet"/>
 </head>
<body>

<div class="top">
<img src="logo.png"/>
<div class="nav-div">
 <ul class="nav">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="#">login</a></li>
    <li><a href="#">contact us</a></li>
  </ul>
</div>
<h1><center>you have signed in.</center></h1>
<ul>
<li class="logout"><a href="logout.php"><button>logout</button></a></li>
</ul>
<table>
<tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Password</th>
  <th>Confirmation password</th>
  <th>Email</th>
  <th>Sex</th>
  <th>Vegan</th>
  <th>Diabetic</th>
  <th>Weight</th>
</tr>
<?php
$sql="SELECT firstname,lastname,password,cpass,email,sex,vegan,diabetic,weight FROM reg;";
mysqli_select_db($conn,'receipe');
$ret=mysqli_query($conn,$sql);

if(!$ret){
  die('couldnot get data'.mysqli_error());
}
else{
  while($row=mysqli_fetch_array($ret,MYSQLI_ASSOC)){
     echo "<tr><td>".$row['firstname']."</td><td>".
      $row['lastname']."</td><td>".$row['password']."</td><td>".$row['cpass'].
      "</td><td>".$row['email']."</td><td>".$row['sex']."</td><td>".$row['vegan'].
      "</td><td>".$row['diabetic']."</td><td>".$row['weight']."</td><td>";
  }
  echo "</table>";
}
 ?>
</table>
</body>
</html>
