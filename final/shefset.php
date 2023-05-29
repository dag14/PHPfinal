
<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
<title>update</title>
<link href="shefset.css" rel="stylesheet"/>
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

 <div class="main"/>
  <div class="form">
 <form name="set" method="POST" action="shefsetaction.php">
   Id:<br>
  <input type="number" name="Id" class="fields"/><br>
  First Name: <br>
  <input type="text" name="firstname" class="fields" />
  <br>
  Last Name :<br>
  <input type="text" name="lastname" class="fields" />
  <br>
  Email:<br>
  <input type="email" name="email" class="fields"/><br/>
  Password:<br>
  <input type="password" name="password" class="fields" />
  <br>
  confirm password:<br>
  <input type="password" name="cpass" class="fields" />
  <br>
 <input type="submit" value="submit" id="btn" name="save"/>


  </form>
</div>
</div>
 </body>
</html>
