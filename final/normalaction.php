<?php
include('connection.php');
if(isset($_POST['upload']))
{
 $textareaValue = $_POST['content'];



 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";

 /* new file size in KB */
 $new_size = $file_size/1024;
 /* new file size in KB */

 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */

 $final_file=str_replace(' ','-',$new_file_name);

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO normale(file,type,size,ingredient) VALUES('$final_file','$file_type','$new_size',' $textareaValue');";
  mysqli_select_db($conn,'receipe');
  $ser=mysqli_query($conn,$sql);
  echo "File sucessfully upload";
 header('location:usertype1.php');

 }
 else
 {

  echo "Error.Please try again".mysqli_error($conn);

		}
	}
?>
