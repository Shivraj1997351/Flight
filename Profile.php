<?php
include('a.php');
require('d.php');
?>
	<html lang="en">

	<head>
	<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
		<title>Profile</title>
		<?php include "./head.html" ?>
	</head>
    <style>
	.avatar {
        vertical-align: middle;
        margin: auto;
        width: 170px;
        height: 170px;
        border-radius: 50%;
        margin-top: 5px;
    }
	</style>
	<body>
		<?php include "./header.html" ?>
		
			<?php
            $username=$_COOKIE['username'];
            $query2="SELECT * FROM users NATURAL JOIN images WHERE username='$username'";
            $result2=mysqli_query($con,$query2) or die(mysql_error());
            $row2=mysqli_fetch_assoc($result2);
        ?>
		<div class="container mt-5">
		<div class="card" style="width:45rem;">
        <img src="<?php echo $row2['Pic']?>" class="avatar">
		<div class="float-center" style="margin-left:30px;">
		<a style="color:red;font-size:25px;text-decoration:none;" href="lo.php">Logout</a>
		</div>
        <div class="card-body">
          <li class="list-group-item">Name:- <?php echo $row2['Name']?></li>
          <li class="list-group-item">Email:- <?php echo $row2['email']?></li>
          <li class="list-group-item">Passport Number:- <?php echo $row2['PASSPORTNO']?></li>
          <li class="list-group-item">Age: <?php echo $row2['AGE']?></li>
	      <li class="list-group-item">Gender: <?php echo $row2['SEX']?></li>
		  <li class="list-group-item">City: <?php echo $row2['CITY']?></li>
		  <li class="list-group-item">State: <?php echo $row2['STATE']?></li>
		  <li class="list-group-item">Country: <?php echo $row2['COUNTRY']?></li>
         
         </div>
		 </div>
		 </div>
		 
		 <br><br>
		 <h3 style="margin-left:100px;color:red;">Booking History</h3><br><br>
		 <div class="container">
		 <div class="row">
		 <?php
		 $user = $_COOKIE['username'];
		 $query3 = "SELECT * FROM ticket WHERE username='$user' ORDER BY TRAVELDATE DESC";
         $result3 = mysqli_query($con,$query3) or die(mysql_error());	
        
         while($row3=mysqli_fetch_assoc($result3))		 
			{
		 ?>
		 <div class="col-sm-4">
		 <div class="card" style="width: 25rem;">
		 <img src="images/flight.jpg" class="card-img-top">
		 <div class="card-body">
		 <ul class="list-group list-group-flush">
		 <li class="list-group-item">Name: <?php echo $row3['Name']?></li>
         <li class="list-group-item">Flightcode:- <?php echo $row3['FLIGHTCODE']?></li>
         <li class="list-group-item">Source:- <?php echo $row3['SOURCE']?></li>
         <li class="list-group-item">Destination: <?php echo $row3['DESTINATION']?></li>
	     <li class="list-group-item">Traveldate: <?php echo $row3['TRAVELDATE']?></li>
		 <li class="list-group-item">Class: <?php echo $row3['CLASS']?></li>
         </ul>
         </div>
		 </div>
		 <br><br>
		 </div>
			<?php 
			}
		
		 ?>
		 </div>
		 </div>

		<br><br>		
    <?php include "./footer.html" ?>
	</body>
	</html>