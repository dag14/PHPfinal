<?php
include('connection.php');
 ?>
<!doctype html>
<html>
<head>
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
$sql="SELECT firstname,lastname,password,cpass,email,sex,vegan,diabetic,weight FROM reg;";
mysqli_select_db($conn,'receipe');
$ret=mysqli_query($conn,$sql);
?>

  <?php while($row=$ret->fetch_assoc()): ?>
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
                 <a href="action1.php?email=<?php echo $row['email'];?>">edit</a>


               </td>
           </tr>

<?php endwhile; ?>



</table>
</body>
</html>
