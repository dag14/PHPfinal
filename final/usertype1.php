<?php
session_start();
if(!isset($_SESSION['d']))
header('location:logintype.php');
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
  
    <li><a href="#">contact us</a></li>
  </ul>
</div>
<ul>
<li class="logout"><a href="logoutt.php"><button id="log">logout</button></a></li>
</ul>
<div class="button">
<button class="butt"><a href="normalfetch.php">view</a></button>
<button class="butt"><a href="comment.php">comment</a></button>
</div>

</body>
</html>
