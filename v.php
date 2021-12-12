<?php
require('d.php');
?>
	
    <html lang="en">
	<head>
		<title>Flights</title>
		<?php include "./head.html" ?>

	</head>
    <body>
	    	<?php include "./header.html" ?>
			<div class="container">
            <div class="col-sm-12">
            <form action="" class="jumbotron shadow p-5">
            <div class="form-group">
            <input id="filter" type="text" class="form-control filter" placeholder="Search flight by typing city use below list for help..." onkeyup="search()">
			</div>
            <div class="form-group">
            <select class="form-control">
			            <option value="Calicut">Calicut</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chennai">Chennai</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Goa">Goa</option>
						<option value="Fort Worth">Fort Worth</option>
						<option value="Indore">Indore</option>
						<option value="Frankfurt">Frankfurt</option>
						<option value="Houston">Houston</option>
						<option value="Delhi">Delhi</option>
						<option value="New York City">New York City</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Louisville">Louisville</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Pune">Pune</option>
						<option value="San Francisco">San Francisco</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
						<option value="Tampa">Tampa</option>
					</select>
            </div>
            </form>
            </div>
            </div>
            <div class="container mt-5">
			<div class="card-lists" id="card-lists">
		    <div class="row">

			<?php
            $sel_query="SELECT * FROM flight;";
            $result = mysqli_query($con,$sel_query);
             
             while($row=mysqli_fetch_assoc($result))
              {
              ?>
			   
				<div class="col-sm-3">
			    <div class="card" style="width: 25rem;">
				<img src="images/flight.jpg" class="card-img-top">
                <div class="card-body">
                Flightcode:-<p style="color:red"><?php echo $row["FLIGHTCODE"];?></p>
                Source: <p class="nam" style="color:purple;"><?php echo $row['SOURCE']?></p>
		        Destination<p class="cit" style="color:green;"><?php echo $row['DESTINATION']?></p>
		        Arrival:-<p style="color:dodgerblue;"><?php echo $row['ARRIVAL']?></p>
                Departure:-<p style="color:dodgerblue;"><?php echo $row['DEPARTURE']?></p>
                </div>
				<div class="card-footer">
				<form action="sticket.php" method="post">
				<input type="hidden" value="<?php echo $row['FLIGHTCODE']?>" name="flcode">
				<button class="btn btn-primary" type="submit">Book</button>
				</form>
				</div>
		        </div>
                <br>
				<br>
				</div>
				
				<?php
                }
                ?>
	            </div>
				</div>
				</div>
                </div>
	
    <?php include "./footer.html" ?>
	<script>
	function search() {
    const input = document.getElementById('filter').value.toUpperCase();
    const cardContainer = document.getElementById('card-lists');
    const cards = cardContainer.getElementsByClassName('col-sm-3');
    for (let i = 0; i < cards.length; i++) {
        let name = cards[i].querySelector(".card-body p.nam");
		let city = cards[i].querySelector(".card-body p.cit");
        if (name.innerText.toUpperCase().indexOf(input) > -1) {
            cards[i].style.display = "block";
        } 
		else if(city.innerText.toUpperCase().indexOf(input) > -1){
			cards[i].style.display = "block";
		}
		else {
            cards[i].style.display = "none";
        }
    }
}

                  
	</script>
	</body>
	</html>