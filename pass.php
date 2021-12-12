<html lang="en">

<head>
	<title>Password recovery</title>
	<?php include "./head.html" ?>
</head>

<body>
	<?php include "./header.html" ?>
	
			<div class="container mt-5">
               <div class="col-sm-4 col-sm-offset-4">
				<form action="m.php" method="post" class="jumbotron shadow p-5">
				     <h3 class="text-info text-center">Password recovery</h3>
                     <div class="form-group">
					   <input type="text" name="username" class="form-control" placeholder="Enter username" required />
					 </div>
					 <div class="form-group">
					   <input type="email" name="email" class="form-control" placeholder="Enter email" required />
					 </div>
					 
					 <input name="submit" type="submit" class="btn btn-primary btn-sm" value="Send Mail" /> 
				</form>
			</div>
			</div>
			
			
			<br><br>
				

<?php include "./footer.html" ?>
</body>
</html>