<?php

 ?>

<!doctype html>
<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" href="login.css" >
  <script src="login.js"></script>
 </head>
 <body>
   <div class="login">
    <img src="log.jpg" class="limg">
     <h1>Login Here</h1>
     <form name="login" method="POST" action="validationtype.php">
      <table>
      <tr><td><label>Email:</label></td></tr>
      <tr><td><input type="text" name="email" class="field" placeholder="type your name" ></td></tr>
      <tr><td><label>Password:</label></td></tr>
      <tr><td><input type="password" name="pname" class="field" placeholder="type your password"></td></tr>
      <tr><td><label>Type:</label></td></tr>
      <tr><td><input type="text" name="type" class="field" placeholder="type your password"></td></tr>
      <tr><td><input type="submit" value="Login" onclick="check()"name="login" id="btn"></td></tr>

      </table>
     </form>
   <div>

 </body>
</html>
