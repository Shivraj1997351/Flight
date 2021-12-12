<?php
include('a.php');
require('d.php');
?>
	
    <html lang="en">
	<head>
		<title>Countrymates</title>
		<?php include "./head.html" ?>

	</head>
	 <style>
	.avatar {
        vertical-align: middle;
        margin: auto;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-top: 5px;
    }
	</style>
    <body>
	    	<?php include "./header.html" ?>
			<div class="container">
			<div class="row">	
            <input id="filter" type="text" class="filter" style="width:800px;margin-left:115px;"  placeholder="Type name or city or state to search the people..." onkeyup="search()">
			<i class="fa fa-search" style="margin-top:24px;height:33px;width:38px;"></i>
            </div>
			<br><br><br>
			<div class="card-lists" id="card-lists">
		    <div class="row">

			<?php
             $username = $_COOKIE['username'];
             $q1 = "SELECT * FROM users WHERE username = '$username'";
             $r1=mysqli_query($con,$q1) or die(mysql_error());
             $ro1=mysqli_fetch_assoc($r1);
             $city = $ro1["CITY"];
             $state = $ro1["STATE"];
			       $country = $ro1["COUNTRY"];
           $query = "SELECT Pic,Name,AGE,CITY,STATE FROM users NATURAL JOIN images WHERE username <> '$username' and (CITY = '$city' or STATE = '$state' or COUNTRY='$country')";
             $result=mysqli_query($con,$query) or die(mysql_error());
             
             while($row=mysqli_fetch_assoc($result))
              {
              ?>
			   
				<div class="col-sm-4">
			    <div class="card">
                <img src="<?php echo $row['Pic']?>" class="avatar">
                <div class="card-body">
                Name:-<p class="nam" style="color:red"><?php echo $row['Name']?></p>
                <p>Age: <?php echo $row['AGE']?></p>
		        City:-<p class="cit" style="color:green;"><?php echo $row['CITY']?></p>
		        State:-<p class="stat" style="color:dodgerblue;"><?php echo $row['STATE']?></p>
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
	
    <?php include "./footer.html" ?>
	<script>
	function search() {
    const input = document.getElementById('filter').value.toUpperCase();
    const cardContainer = document.getElementById('card-lists');
    const cards = cardContainer.getElementsByClassName('col-sm-4');
    for (let i = 0; i < cards.length; i++) {
        let name = cards[i].querySelector(".card-body p.nam");
		let city = cards[i].querySelector(".card-body p.cit");
		let state = cards[i].querySelector(".card-body p.stat");
        if (name.innerText.toUpperCase().indexOf(input) > -1) {
            cards[i].style.display = "";
        } 
		else if(city.innerText.toUpperCase().indexOf(input) > -1){
			cards[i].style.display = "";
		}
		else if(state.innerText.toUpperCase().indexOf(input) > -1){
			cards[i].style.display = "";
		}
		else {
            cards[i].style.display = "none";
        }
    }
}
	</script>
	</body>
	</html>