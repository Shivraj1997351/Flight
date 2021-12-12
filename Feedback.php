<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<title>Feedback</title>
<?php include "./head.html" ?>
<script>
$(document).ready(function(){
  $(".i").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $(".i").blur(function(){
    $(this).css("background-color", "white");
  });
});
</script>
</head>
<body>
<?php include "./header.html" ?>    

<?php 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$source=$_POST['source'];
	$dest=$_POST['dest'];
	$q=$_POST['query'];
	$t=$_POST['tarea'];
	$query="INSERT INTO feedback(Name,email,SOURCE,DESTINATION,QUERY,Feed) VALUES('$name','$email','$source','$dest','$q','$t')";
	$result = mysqli_query($con,$query);
	if($result){
     header("Location: H.php");		
	}
}
else{
?>
<div class="container mt-5 mb-5">
<img src="https://www.happyfares.in/Content/Images/Feedback.jpg"/><br>
<div class="col-sm-4 col-sm-offset-4">
    <h2 class="card-title text-center" style="color:red;">Feedback</h2>
   <form action="" method="POST" class="jumbotron shadow p-5">
	<div class="form-group">
	<input type="text" name="name" class="form-control i" placeholder="Name*" required />
	</div>
	<div class="form-group">
	<input type="email" name="email" class="form-control i" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="rahul1234@gmail.com" placeholder="Email*" required />
	</div>
	<div class="form-group">
	<input type="text" name="source" class="form-control i" autocomplete="on" placeholder="Source*" required />
	</div>
	<div class="form-group">
	<input type="text" name="dest" class="form-control i" autocoplete="on" placeholder="Destination*" required />
	</div>
	<div class="form-group">	
	<select name="query" class="form-control">
    <option selected disabled>What is the nature of your query?</option>
    <option value="Appreciation">Appreciation</option>
    <option value="Suggestion">Suggestion</option>
    <option value="Complaint">Complaint</option>
    <option value="Request">Request</option>
    <option value="Enquiry">Enquiry</option>
    </select>
	</div>
    
	<div class="form-group">
	<textarea rows="5" cols="40" name="tarea" class="form-control" placeholder="Write your feedback here..." required></textarea>
	</div>
	
	
	<input type="submit" class="btn btn-primary btn-sm" name="submit"  value="Submit" />
</form>
</div>
</div>
<?php } ?>
<br><br>
<?php include "./footer.html" ?>
</body>
</html>
 
