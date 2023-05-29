<?php

include('connection.php');
session_start();
if(!isset($_SESSION['e'])){
header('location:multiuserlog.php');
}
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
<ul>
<li class="logout"><a href="logoutm.php"><button id="log">logout</button></a></li>
</ul>
<div class="button">
<button class="butt"><a href="sheffetch.php">Shef</a></button>
<button class="butt"><a href="fetch.php">User</a></button>
<button class="butt"><a href="shefreg.php">addshef</a></button>
</div>

</body>
</html>
