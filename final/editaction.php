<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname=$_POST['firstname'];
}
$sql = "UPDATE reg set firstname='".$firstname."' WHERE email='" . $_GET["email"] . "'";
mysqli_select_db($conn,'receipe');
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<html>

<head>
<title></title>
</head>

<body>

  <form action="#" method="POST">
<input type="firstname" name="firstname"/>
<input type="submit" name="submit"/>
	</form>
</body>
</html>
