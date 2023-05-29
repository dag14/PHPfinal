<html>
<body>
<?php
$dbhost='localhost';
$username='root';
$password='';

$conn=mysqli_connect($dbhost,$username,$password);
if(!$conn){

die('could not connect'.mysqli_error());
}

echo "connected successfully";




?>

</body>


</html>