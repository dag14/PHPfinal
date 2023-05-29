<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
<link href="receipe.css" rel="stylesheet"/>
</head>
<body>
  <div class="top">
  <img src="logo.png"/>
  <div class="nav-div">
   <ul class="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="#">login</a></li>
      <li><a href="#">contact us</a></li>
    </ul>
  </div>
<div class="main">
<form action="normalaction.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br>

<label>Textarea:</label>

<div>
    <textarea rows="10" cols="60" name="content" required></textarea>
</div>
<button type="submit" name="upload">upload</button>
</form>

</div>
<button class="butt"><a href="shef.php">back</a></button
</body>
</html>
