<?php
include ('connection.php');
mysqli_select_db($conn,'receipe');
$result = mysqli_query($conn,"SELECT * FROM reg");
?>

<!DOCTYPE html>
<html>
<head>

<title>modify data</title>
</head>
<body>

<table>
	<tr>
		<th>Firstname</th>
	  <th>Lastname</th>
	  <th>Password</th>
	  <th>Confirmation password</th>
	  <th>Email</th>
	  <th>Sex</th>
	  <th>Vegan</th>
	  <th>Diabetic</th>
	  <th>Weight</th>
	  <th>action</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
		<td><?php echo $row['firstname']?></td>
 		<td><?php echo $row['lastname']?></td>
 		 <td><?php echo $row['password']?></td>
 			<td><?php echo $row['cpass']?></td>
 			 <td><?php echo $row['email']?></td>
 				<td><?php echo $row['sex']?></td>
 				 <td><?php echo $row['vegan']?></td>
 					<td><?php echo $row['diabetic']?></td>
 					 <td><?php echo $row['weight']?></td>
	<td><a href="editaction.php?email=<?php echo $row["email"]; ?>">modify</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
