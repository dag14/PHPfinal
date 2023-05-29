<?php

include('connection.php');
session_start();
if(!isset($_SESSION['s']))
header('location:loginshef.php');
?>
<!doctype html>
<html>
 <head>
   <title>about</title>
   <link href="shef.css" rel="stylesheet"/>
 </head>
<body>

<div class="top">
<img src="logo.png"/>
<div class="nav-div">
 <ul class="nav">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="register.php">Register</a></li>

    <li><a href="#">contact us</a></li>
  </ul>
</div>
<ul>
<li class="logout"><a href="logoutsh.php"><button id="log">logout</button></a></li>
</ul>
<div class="button">

<button class="butt"><a href="diabetic.php">Add</a></button>
<button class="butt"><a href="normal.php">Addn</a></button>
<button class="butt"><a href="receiperetrieve1.php">View</a></button>
<button class="butt"><a href="commentfetch.php">Comment</a></button>

</div>

</body>
</html>
