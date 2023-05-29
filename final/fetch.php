<!doctype html>
<html>
<head>
  <title>admin view</title>
  <link href="adview.css" rel="stylesheet"/>
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
$result=mysqli_query($conn,"SELECT * FROM reg");
?>
<?php
if(mysqli_num_rows($result)>0){
 ?>
 <table class="view">
<tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Password</th>
  <th>Cpassword</th>
  <th>Email</th>
  <th>Sex</th>
  <th>Vegan</th>
  <th>Diabetic</th>
  <th>Weight</th>
  <th>action</th>

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
          <td><?php echo $row['vegan']?></td>
           <td><?php echo $row['diabetic']?></td>
            <td><?php echo $row['weight']?></td>
            <td>
          <button id="edit"><a   href="set.php?email=<?php echo $row['email'];?>">edit</a></button>
          <button id="delete"><a  href="deleteaction.php?email=<?php echo $row['email'];?>">delete</a></button>
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
</body>
</html>
