<?php
include('connection.php');
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE reg set email='" . $_POST['email'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', password='" . $_POST['password'] . "' ,cpass='" . $_POST['cpass'] . "' WHERE email='" . $_POST['email'] . "'");
$message = "Record Modified Successfully";
}
$sql="SELECT * FROM reg WHERE email='" . $_GET['email'] . "';";

mysqli_select_db($conn,'receipe');
$result = mysqli_query($conn,$sql);


$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update user Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="mukera.php">Employee List</a>
</div>
Email: <br>
<input type="hidden" name="email"  value="<?php echo $row['email']; ?>">
<input type="text" name="email"  value="<?php echo $row['email']; ?>">
<br>
First Name: <br>
<input type="text" name="firstname"  value="<?php echo $row['firstname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lastname"  value="<?php echo $row['lastname']; ?>">
<br>
Password:<br>
<input type="password" name="password"  value="<?php echo $row['password']; ?>">
<br>
confirm password:<br>
<input type="password" name="cpass"  value="<?php echo $row['cpass']; ?>">
<br>
<input type="submit" name="submit" value="Submit" >

</form>
</body>
</html>
