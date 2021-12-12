<?php
error_reporting(0);
require('d.php');
?>
<html lang="en">
<head>
<title>Sign up</title>
<?php include "./head.html" ?>
</head>
<body>
    <?php include "./header.html" ?>
	
<?php
    
	if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$filename= $_FILES['uploadfile']['name'];
	$tempname= $_FILES['uploadfile']['tmp_name'];
	$folder= "Pics/".$filename;
	move_uploaded_file($tempname,$folder);
	$sql="INSERT INTO images(username,Pic) VALUES('$username','$folder')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	  	echo"<div class='card'><div class='card-body text-center'><h3 style='color:red;'>Registered successfully</h3><a href='l.php' style='text-decoration:none;'>Login</a></div></div>";
	}
 	else{
		 echo"<div class='card'><div class='card-body text-center'><h3 style='color:red;'>Image exists Please use new one</h3></div></div>";
 	}
 }
 else {?>
<div class="container mt-5">
<div class="col-sm-4 col-sm-offset-4">
<form action="" method="post" enctype="multipart/form-data" class="jumbotron shadow p-5">
   <div class="form-group">
   <input type="text" name="username" class="form-control" placeholder="Enter username" required />
   </div>
   <div class="form-group">
   <input type="file" name="uploadfile" value="" required />Photo
   </div>
   <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit"/>
 </form>
 </div>
 </div>
 <?php }?>
 <?php include "./footer.html" ?>
 </body>
 </html>
