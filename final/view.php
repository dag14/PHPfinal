<html>
<head>
  <link href="view.css" rel="stylesheet"/>
</head>
<body>
<table  class="fetch">
<tr>
<td>firstname</td>
<td>lastname</td>
<td>password</td>
<td>cpass</td>
<td>email</td>
<td>sex</td>
<td>vegan</td>
<td>diabetic</td>
<td>weight</td>
</tr>
<tr>
<td>hert</td>
<td>get</td>
<td>kel</td>
<td>nbr</td>
<td>ver</td>
<td>cer</td>
<td>uyt</td>
<td>oiu</td>
<td>lpo</td>

</tr>
</table>
<?php
include('connection.php');
mysqli_select_db($conn,'receipe');
$q ="select *from reg where email='$email'";
mysqli_query($conn,$q)

?>
</body>
</html>
