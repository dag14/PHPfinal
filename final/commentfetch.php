<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>File Retrieve</title>
<link href="retrieve1.css" rel="stylesheet"/>
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



<div width="400px" height="400px">

    <?php
    mysqli_select_db($conn,'receipe');
$result = mysqli_query($conn,"SELECT * FROM comments");
  ?>
  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>



        <div class="file">
          <fieldset>
          <?php echo $row["comment"];?>
        </fieldset>
        </div>
      </div>


       <?php
$i++;
}
?>


</div>
<button class="butt"><a href="shef.php">back</a></button>
</body>
</html>
