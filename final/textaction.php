<?php
include('connection.php');

if(isset($_POST['submit']))
{
	$textareaValue = $_POST['content'];

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
