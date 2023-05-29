<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Id</td>
    <td>Ingredient</td>
    <td>File</td>
  </tr>

<?php

include('connection.php');
mysqli_select_db($conn,'receipe');
$records = mysqli_query($conn,"select * from content");

while($row = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $row['Id']; ?></td>
    <td><?php echo $row['ingredient']; ?></td>
    <td><img src="upload/<?php echo $row['file'] ?>" width="100" height="100"></td>
  </tr>
<?php
}
?>

</table>

<?php mysqli_close($conn);  // close connection ?>

</body>
</html>
