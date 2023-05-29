<?php
if(isset($_POST['submit_rating']))
{
  include('connection.php');
  mysqli_select_db($conn,'receipe');

  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysqli_query($conn,"insert into rating values('','$php_rating','$asp_rating','jsp_rating')");
}
?>
