<?php
session_start();
include('connection.php');
if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['pname'];

  $sql = "SELECT count(*) as total FROM `reg` WHERE email = '".$email."' AND password = '".$password."'; ";
  mysqli_select_db($conn, $sql);
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)> 0){
    $_SESSION['email'] = $email;
    header("location:tryaction.php");

  }

}
?>
<form name="login" method="POST">
 <table>
 <tr><td><label>Email:</label></td></tr>
 <tr><td><input type="text" name="email" class="field" placeholder="type your name" ></td></tr>
 <tr><td><label>Password:</label></td></tr>
 <tr><td><input type="password" name="pname" class="field" placeholder="type your password"></td></tr>
 <tr><td><input type="submit" value="Login" onclick="check()"name="login" id="btn"></td></tr>
 <tr><td><a href="#">Lost your password?</td></tr>
 <tr><td><a href="">Don't have an account?</td></tr>
 </table>
</form>
