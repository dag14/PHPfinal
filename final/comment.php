<?php
include('connection.php');

if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);

	$sql = "insert into comments(comment) values ('".$textareaValue."')";
	mysqli_select_db($conn,'receipe');
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);

	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>how to store textarea value in database in php</title>
<link href="comment.css" rel="stylesheet"/>

</head>
<body>
	<?php
		if(isset($successMsg))
		{
			echo "<div class='success-msg'>";
			print_r($successMsg);
			echo "</div>";
		}
	?>
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
	 <h1><center>Write your comment below</center></h1>
	<div class="form">
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

		<label>Comment:</label>

		<div>
			<textarea  class="fields" rows="10" cols="60" name="content" required></textarea>
		</div>

		<input type="submit" name="submit" id="btn" value="Submit">

	</form>
</div>
</body>
</html>
