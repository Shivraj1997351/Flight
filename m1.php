<?php
include('a.php');
require('d.php');
?>
<html lang="en">
<head>
<title>Home</title>
<?php include "./head.html" ?>
</head>
<body>
<?php include "./header.html" ?>

<?php
 if(isset($_POST['submit']))
 {
   $username=$_COOKIE['username'];
   $bdate = date("y-m-d");
   $name =$_POST['name'];
   $source = $_POST["source"];
   $airquery = "SELECT * FROM airport WHERE CITY = '$source'";
   $airresult=mysqli_query($con,$airquery) or die(mysql_error());
   $airrow=mysqli_fetch_assoc($airresult);
   $apname=$airrow['AP_NAME'];
   $dest=$_POST["destination"];
   $tdate=$_POST["date"];
   $class= $_POST["class"];
   $age=$_POST["age"];
   $sex=$_POST["sex"];
   $q1="SELECT * FROM flight WHERE SOURCE='$source' and DESTINATION='$dest'";
   $r1=mysqli_query($con,$q1) or die(mysql_error());
   $ro1=mysqli_fetch_assoc($r1);
   $c=mysqli_num_rows($r1);
   
   if($c==0)
   {
	 echo"<div class='card'><div class='card-body text-center'><b style='color:Tomato;margin-left:20px;'>No Flights found For This route Please Check the route Via Mumbai or Delhi</b></div></div>";
   }
   else
   {
     $fcode=$ro1["FLIGHTCODE"];
	 $arr=$ro1["ARRIVAL"];
	 $dep=$ro1["DEPARTURE"];
     $ins_query="INSERT INTO ticket(username,AP_NAME,FLIGHTCODE,SOURCE,DESTINATION,BOOKINGDATE,TRAVELDATE,CLASS,Name,Age,Sex)values('$username','$apname','$fcode','$source','$dest','$bdate','$tdate','$class','$name','$age','$sex')";
    if(mysqli_query($con,$ins_query))
    {
	
     $query1="SELECT * FROM users WHERE username='$username'";
     $result1=mysqli_query($con,$query1) or die(mysql_error());
     $row1=mysqli_fetch_assoc($result1);
     $semail ="u18co109@coed.svnit.ac.in";
     $email=$row1["email"];
     $headers = "From: <" . $email . ">\n" ;
     $headers .= "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=utf-8\n";
     $headers .= "Return-Path: " . $email . "\n";
     $headers .= "X-Mailer: PHP/" . phpversion();
     $subject = "Mail for Flight ticket";
	 $status="Confirmed";
     $message = "Your ticket has been confirmed";
     if (mail($email, $subject, $message, $headers)) 
	 {
	  echo"<div class='card'><div class='card-body text-center'><b style='color:red;'>Ticket has been booked for you will get the mail soon.Thanks for Using Our Services,Happy journey!</b></div></div>";
      echo"<br><br>";
	 }
     ?>
	 <div class="container">
     <div class="col-sm-6 col-sm-offset-3">
     <img src="images/flight.jpg" height="337" width="120" class="card-img-top">
     <div class="jumbotron shadow p-5">
     <h2 class="text-muted text-center">Ticket</h2>
     <ul class="list-group list-group-flush">
     <li class="list-group-item">Airport:- <?php echo $apname; ?></li>
	   <li class="list-group-item">Ticket Status:- <?php echo "<b style='color:red;'>".$status."</b>"; ?></li>
     <li class="list-group-item">Flightcode:- <?php echo $fcode; ?></li>
     <li class="list-group-item">Name:- <?php echo $name; ?></li>
     <li class="list-group-item">Source:- <?php echo $source; ?></li>
	   <li class="list-group-item">Destination:- <?php echo $dest;?></li>
	   <li class="list-group-item">Class:- <?php echo $class;?></li>
	   <li class="list-group-item">Age:- <?php echo $age;?></li>
	   <li class="list-group-item">Gender:- <?php echo $sex;?></li>
	   <li class="list-group-item">Arrival time:- <?php echo $arr;?></li>
	   <li class="list-group-item">Departure time:- <?php echo $dep;?></li>
     </ul>
     </div>
     </div>
     </div>
	 <?php
     
	}
     else
	 {
	  echo"<b style='color:red;margin-left:20px;'>You can't book multiple tickets for same passenger on a particular day</b>";
     }
    }
 
    }
?>

<br><br>
<?php include "./footer.html" ?>
<script>

</script>
</body>
</html>
