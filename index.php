<?php
include('a.php');
require('d.php');
?>
<html lang="en">
<head>
	<title>SHS flight booking</title>
	<?php include "./head.html" ?>
  <script>
    /*
      $(document).ready(function() {  
	    $("#sg").fadeIn();
        $("#div1").fadeIn();
        $("#b1").click(function(){
		$("#div1").fadeOut();
		$("#sg").fadeOut();
    });
	});
  */
      
  </script>
  <script>
    /*
    $(document).ready(function(){
  $("#p1").mouseenter(function(){
    $("#cl").fadeIn();
  });
});*/
 
  </script>

</head>
<body>

	<?php include "./header.html" ?>

	<?php 
	$user = $_COOKIE["username"];
	$query1="SELECT * FROM ticket WHERE username='$user' ORDER BY TRAVELDATE DESC LIMIT 3";
	$result1=mysqli_query($con,$query1);
	$c = mysqli_num_rows($result1)
	?>
  <div class="container">
  <div class="col-sm-4 col-sm-offset-4">
	<div class="card bg-info" id="div1" style="width: 27rem;">
  <h3 style="color:red;"  class="text-center" id="sg">Suggestions for flights</h3><br>
	<div class="card-body">
	<ul class="list-group list-group-flush">
	<?php
	if($c!=0){
	while($row1=mysqli_fetch_assoc($result1)){?>
    <li class="list-group-item">
		<?php echo "<b>".$row1['SOURCE']."</b>"?><?php echo "<b class='mx-5'>".$row1['DESTINATION']."</b>"?>
	</li>
	<?php }
	?>
	</ul>
	<?php 
	}
	else{?>
	
		<?php echo "<b style='color:red;text-align:center;'>We will show the results here</b>";?>
	<?php
	}
	?>
  <!--
	<div class="card-footer">
	<button id="b1" class="btn btn-primary mt-2 py-0">Close</button>
	</div>-->
	</div>
	</div>
  </div>
  </div>
	<br><br><br>

    
    <div class="container">
    
    <button style="text-align:center;height:30px;" class="btn btn-info text-center mt-5" id="p1">&nbsp;Places you may like</button><br><br>

    <div class="row" id="cl">
    <?php
	 $username = $_COOKIE['username'];
     $query = "SELECT CITY FROM users WHERE username='$username'";
     $result = mysqli_query($con,$query) or die(mysql_error());	 
	 $row = mysqli_fetch_assoc($result);
	 $city = $row["CITY"];
	 $q1 = "SELECT DESTINATION FROM flight WHERE SOURCE='$city' LIMIT 8";
	 $r1 = mysqli_query($con,$q1) or die(mysql_error());
	 while($ro = mysqli_fetch_assoc($r1)){?>

   <div class="col-sm-3">
   <div class="card" style="width: 27rem;margin-left:0px;">
   <a href='https://en.wikipedia.org/wiki/<?php echo $ro["DESTINATION"];?>' target="_blank">
   <img src="images/<?php echo $ro["DESTINATION"];?>.jpg" height="240" width="120" class="card-img-top"></a>
   <div class="card-body">
   <h2 class="card-title" style="margin-left:50px;"><?php echo $ro["DESTINATION"];?></h2>
   </div>
   </div><br>
   </div>
   <?php } ?>
   </div>
   </div>
   <br><br>

<div class="container mb-5">
  <div class="col-sm-12">
  <h2 class="text-center" style="color:red;">Most booked Destinations</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Mumbai.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
        </div>
      </div>

      <div class="item">
        <img src="Search/Delhi.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="Search/Goa.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Goa</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Search/Calicut.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chandigarh</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Kerala.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Kerala</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
      </div>
	  
    </div>
	
	

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<?php include "./footer.html" ?>
</body>
</html>