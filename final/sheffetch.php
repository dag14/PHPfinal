<!doctype html>
<html>
<head>

  <title>shef's information </title>
  <link href="shview.css" rel="stylesheet"/>
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
<?php
include('connection.php');
mysqli_select_db($conn,'receipe');
$result=mysqli_query($conn,"SELECT * FROM shefreg");
?>
<?php
if(mysqli_num_rows($result)>0){
 ?>
 <table>
<tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Password</th>
  <th>Cpassword</th>
  <th>Email</th>
  <th>Sex</th>
  <th>Action</th>


</tr>
<?php
$i=0;
while($row=mysqli_fetch_array($result)){
?>
<tr>

    <td><?php echo $row['firstname']?></td>
     <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['password']?></td>
       <td><?php echo $row['cpass']?></td>
        <td><?php echo $row['email']?></td>
         <td><?php echo $row['sex']?></td>
            <td>
          <button><a id="edit" href="shefset.php?Id=<?php echo $row['Id'];?>">edit</a></button>
        <button><a  id="delete" href="shefdeleteaction.php?Id=<?php echo $row['Id'];?>">delete</a></button>

        </td>

</tr>
<?php
$i++;
}
 ?>
</table>
<?php
}
else{
  echo "no result found";
}
  ?>
  <button class="butt"><a  href="admin.php?Id=<?php echo $row['Id'];?>">back</a></button>
</body>
</html>
