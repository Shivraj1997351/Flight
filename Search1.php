<?php
require('d.php');
?>
<html lang="en">
<head>
<title>Popular Routes</title>
<?php include "./head.html" ?>
</head>
<body>
<?php include "./header.html" ?>
<?php
if(isset($_POST['btn']))
{
$result= $_POST['search'];
if (strcmp($result,"ChennaiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Chennai' AND DESTINATION='Mumbai'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div>
	<br><br>
	<div class="container mt-5">
  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Chennai.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chennai</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Search/Mumbai.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
        </div>
      </div>
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
  </div><br>

<?php  } 

if (strcmp($result, "DelhiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='Mumbai' ";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div>
	<br><br>
	<div class="container">
  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Delhi.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Search/Mumbai.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
        </div>
      </div>
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
  </div><br>

<?php  }
if (strcmp($result, "GoaDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Goa' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div>
	<br><br>
	<div class="container">
  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Goa.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Goa</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Search/Delhi.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
      </div>
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
  </div><br>

<?php  }
if (strcmp($result, "FrankfurtDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Frankfurt' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div>
	<br><br>
	<div class="container">
  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Search/Delhi.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
      </div>
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
  </div><br>

<?php  }

  if (strcmp($result, "CalicutSanFrancisco") == "true")
  {
	$query2="SELECT * FROM flight WHERE SOURCE='Calicut' AND DESTINATION='San Francisco'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div>
	<br><br>
	<div class="container">
    <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Calicut.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Calicut</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/sanfrans.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">San Fransisco</h3>
        </div>
      </div>
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
  </div><br>
	

<?php  }

if(strcmp($result, "DelhiNewYorkCity") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='New York City'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	            <div class="container">
	            <div class="card" style="width: 25rem;">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row2["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row2['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row2['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row2['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row2['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row2['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
				</div><br><br>
	<div class="container">
  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Delhi.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/newyork.jpg" style="width:130%;height:100%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">NewYorkCity</h3>
        </div>
      </div>
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
  </div><br><br><br><br>


<?php
   }
}
else{
?>
<div class="container">
<div class="col-sm-12">
<h2 style="color:red;" class="text-center">Popular trips</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Search/Chennai.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chennai</h3>
        </div>
      </div>

      <div class="item">
        <img src="Search/Mumbai.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
        </div>
      </div>
	  
	  <div class="item">
	    <img src="Search/Delhi.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
		<h3 style="color:red;">Delhi</h3>
        </div>
      </div>
	  
      <div class="item">
        <img src="Search/Goa.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Goa</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Search/Calicut.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Calicut</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/sanfrans.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">San Fransisco</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/newyork.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">NewYorkCity</h3>
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

<div class="container mb-5 mt-5">
<div class="col-sm-4 col-sm-offset-4">
<form action="" method="post" class="jumbotron shadow p-5">
<div class="form-group">
<select name="search" class="form-control">
<option value="ChennaiMumbai">Chennai Mumbai</option>
<option value="DelhiMumbai">Delhi Mumbai</option>
<option value="GoaDelhi">Goa Delhi</option>
<option value="FrankfurtDelhi">Frankfurt Delhi</option>
<option value="CalicutSanFrancisco">Calicut SanFrancisco</option>
<option value="DelhiNewYorkCity">Delhi NewYorkCity</option>
</select>
</div>
<input type="submit" name="btn" class="btn btn-primary" value="Search"/>
</form>
</div>
</div>
<?php }?>
<br>
<?php include "./footer.html" ?>
</body>	
</html>




