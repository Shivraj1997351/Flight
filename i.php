<?php
require('d.php');
?>
	
    <html lang="en">
	<head>
		<title>Airports</title>
		<?php include "./head.html" ?>

	</head>
    <body>
	    	<?php include "./header.html" ?>
			<div class="container">
            <div class="col-sm-12">
            <form action="" class="jumbotron shadow p-5">
            <div class="form-group">
            <input id="filter" type="text" class="form-control filter" placeholder="Search airport by typing city,state or country use below list for help..." onkeyup="search()">
			</div>
            <div class="form-group">
            <select class="form-control">
                <option value="India">India</option>
				<option value="United States">United States</option>
				<option value="Germany">Germany</option>
				<option value="Kerala">Kerala</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Goa">Goa</option>
				<option value="Texas">Texas</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Hesse">Hesse</option>
				<option value="Delhi">Delhi</option>
				<option value="New York">New York</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kentucky">Kentucky</option>
				<option value="West Bengal">West Bengal</option>
				<option value="California">California</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Florida">Florida</option>
					</select>
            </div>
            </form>
            </div>
            </div>
            <div class="container mt-5">
			<div class="card-lists" id="card-lists">
		    <div class="row">

			<?php
            $sel_query="SELECT * FROM airport;";
            $result = mysqli_query($con,$sel_query);
             
             while($row=mysqli_fetch_assoc($result))
              {
              ?>
			   
				<div class="col-sm-4">
			    <div class="card" style="width: 25rem;">
				<img src="images/flight.jpg" class="card-img-top">
                <div class="card-body">
                Airport:-<p style="color:red"><?php echo $row["AP_NAME"];?></p>
                State: <p class="nam" style="color:purple;"><?php echo $row['STATE']?></p>
		        Country<p class="cit" style="color:green;"><?php echo $row['COUNTRY']?></p>
		        City:-<p class="cnt" style="color:dodgerblue;"><?php echo $row['CITY']?></p>
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
    const cards = cardContainer.getElementsByClassName('col-sm-4');
    for (let i = 0; i < cards.length; i++) {
        let name = cards[i].querySelector(".card-body p.nam");
		let city = cards[i].querySelector(".card-body p.cit");
        let cnt = cards[i].querySelector(".card-body p.cnt");
        if (name.innerText.toUpperCase().indexOf(input) > -1) {
            cards[i].style.display = "block";
        } 
		else if(city.innerText.toUpperCase().indexOf(input) > -1){
			cards[i].style.display = "block";
		}
        else if(cnt.innerText.toUpperCase().indexOf(input) > -1){
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