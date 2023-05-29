<?php
include('connection.php');
if(count($_POST)>0){
mysqli_select_db($conn,'receipe');
mysqli_query($conn,"UPDATE reg firstname='".$_POST['firstname']."' WHERE email='".$_POST['email']."';");

}
 $sql=("SELECT * FROM reg WHERE email='".$_POST['email']."';");

mysqli_select_db($conn,'receipe');
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);

?>
<!doctype html>
<html>
<head></head>
<body>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
  <label>name</label>
<input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/>
<input type="hidden" name="id" value="<?php $row['email']; ?>" />
<input type="submit" name="id"/>
<a href="fetch.php">cancel</a>
</form>
</body>

</html>
