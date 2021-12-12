<?php
	include('a.php');
	require('d.php');
	$user = $_COOKIE['username'];
	$flight = $_POST['flcode'];
	$query3 = "SELECT * FROM flight WHERE FLIGHTCODE='$flight'";
	$result4 = mysqli_query($con,$query3) or die(mysql_error());
	$row4 = mysqli_fetch_assoc($result4);
	
	
	
?>
	<html lang="en">

	<head>
		<title>Ticket booking</title>
		<?php include "./head.html" ?>
		<script>
			$(document).ready(function(){
              $(".i").focus(function(){
                $(this).css("background-color", "yellow");
              });
              $(".i").blur(function(){
                $(this).css("background-color", "white");
              });
			  $(function(){
                var dtToday = new Date();
				var month = dtToday.getMonth() + 1;
				var day = dtToday.getDate();
				var year = dtToday.getFullYear();

				if(month < 10)
				    month = '0' + month.toString();
				if(day < 10)	
				    day = '0' + day.toString();
				var maxDate = year + '-' + month + '-' + day;
				$("#datecontrol").attr('min', maxDate);
			  });
			  
            });

         
        </script>

		
	</head>

	<body>
		<?php include "./header.html" ?>
			<div class="container mb-5 mt-5">
				<div class="col-sm-12">
				<h2 style="color:red;">Ticket booking(Cities are given in the same order of airport)</h2>
				<form method="post" action="sm.php" name="login" class="jumbotron shadow p-5">
					<input name="source" class="form-control" type="text" value="<?php echo $row4['SOURCE'] ?>">
					<br>
					<br>
					<input name="destination" class="form-control" type="text" value="<?php echo $row4['DESTINATION']?>">
					<br>
					<br>
						<input type="date" name="date" id="datecontrol" class="form-control"  required />
					<br>
					<input type="radio" name="class"  value="ECONOMY" required>&nbsp;ECONOMY CLASS
					<br>
					<input type="radio" name="class"  value="BUSINESS" required>&nbsp;BUSINESS CLASS
					<br>
					<input type="radio" name="class" value="FIRST" required>&nbsp;FIRST CLASS
					<br><br>
						<input type="text" class="form-control i" name="name" placeholder="Enter passenger name" required /><br>
					
						<input type="text" class="form-control i" name="age" id="age" placeholder="Enter age" onchange="validateage()" required /><br>
					
					
						<input type="text" class="form-control i" name="sex" id="sex" placeholder="Enter gender" onchange="validatesex()" required /><br>
					
					    <input type="hidden" value="<?php echo $flight ?>" name="flcode">
						<input name="submit" type="submit" class="btn btn-primary btn-sm" value="Book" />
					
				</form>
				</div>
			</div>
			<script>
			function validatesex() {
				var a = document.forms["login"]["sex"].value;
				var b = a.toLowerCase();
				if(!(b == "male" || b == "female" || b == "others")) {
					alert("Select between Male,Female and others");
				}
			}
			
			function validateage() {
				var x = document.forms["login"]["age"].value;
				if(isNaN(x) || x < 5 || x > 90) {
					alert("Age should be in between 5 to 90");
				}
			}
			
			

			</script>
          
	<?php include "./footer.html" ?>		
	</body>
 
	</html>