<html lang="en">

<head>
	<title>Sign up</title>
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
		  require('d.php');
          if (isset($_REQUEST['username'])){
             // removes backslashes
             $username = stripslashes($_REQUEST['username']);
             //escapes special characters in a string
             $username = mysqli_real_escape_string($con,$username);
             $email = stripslashes($_REQUEST['email']);
             $email = mysqli_real_escape_string($con,$email);
             $password = stripslashes($_REQUEST['password']);
             $password = mysqli_real_escape_string($con,$password);
             $name=$_REQUEST['name'];
             $trn_date = date("Y-m-d");
             $passportno =$_REQUEST['passportno'];
             $age=$_REQUEST['age'];
             $sex=$_REQUEST['sex'];
             $city=$_REQUEST['city'];
             $state=$_REQUEST['state'];
             $country=$_REQUEST['country'];
             $query = "INSERT into users(username, password, Name,email,trn_date,PASSPORTNO,AGE,SEX,CITY,STATE,COUNTRY) VALUES('$username', '$password','$name','$email','$trn_date','$passportno','$age','$sex','$city','$state','$country')";
             $result = mysqli_query($con,$query);
                if($result){
	               header('Location: images.php');
                   }
				else {
					echo"<div class='card'><div class='card-body text-center'><b style='color:Tomato;margin-left:20px;'>Please register with valid details</b></div></div>";
				}
				   
             }else{
             ?>

			
        <div class="container mt-5">
        <div class="col-sm-4 col-sm-offset-4">
				<form name="registration" ng-app="" action="" method="post" class="jumbotron shadow p-5" id="myForm">
          <h3 class="text-info text-center">Registration</h3> 
          <div class="form-group">
					     <input type="text" name="username" class="form-control i" ng-model="username" placeholder="Enter username" onkeyup="validateuser(this.value)" required />
					     <span style="color:red;" ng-show="registration.username.$touched && registration.username.$invalid">username is required</span>
               <p style="color:red;"><span id="uname"></span></p>
          </div>
          <div class="form-group">
					     <input type="password" id="password" class="form-control i" name="password" placeholder="Enter password" onkeyup="validatepassword(this.value)" required />
					     <p style="color:red;"><span id="pwd"></span></p>
          </div>
          <div class="form-group">
					     <input type="text" name="name" class="form-control i" placeholder="Enter name" required />
          </div>
          <div class="form-group">
					     <input type="email" name="email" class="form-control i" ng-model="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="validateemail(this.value)" placeholder="Enter email" required />
               <span style="color:red;" ng-show="registration.email.$dirty && registration.email.$invalid">
                  <span ng-show="registration.email.$error.email">Not a valid email</span>
                  <span ng-show="registration.email.$error.required">email is required</span>
               </span>
               <p style="color:red;"><span id="email"></span></p>
          </div>
          <div class="form-group">
					     <input type="text" name="passportno" class="form-control i" autocomplete="off" placeholder="Enter Passportno" required />
          </div>
          <div class="form-group">
					     <input type="text" name="age" id="age" class="form-control i" autocomplete="off" placeholder="Enter Age" required />	
          </div>	
          <div class="form-group">
					     <input type="text" name="sex" id="sex" class="form-control i" autocomplete="off" placeholder="Enter Gender" onchange="validatesex()" required />
          </div>
          <div class="form-group">
					     <input type="text" name="city" class="form-control i"  placeholder="Enter your City" required />
          </div>
          <div class="form-group">
					     <input type="text" name="state" class="form-control i"  placeholder="Enter your State" required />
         </div>
         <div class="form-group">
				    	<input type="text" name="country" class="form-control i" placeholder="Enter your Country" required />
         </div>
		 <div class="form-group">
		               <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit" /> 
					   <button type="reset" class="btn btn-warning btn-sm mx-2" onclick="myFunction()">Reset</button>
		</div>
				</form>
			</div>
    </div>
			<script>
            
			function validateuser(str) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("uname").innerHTML = this.responseText;
                 }
               };
               xmlhttp.open("POST", "validate.php?q=" + str, true);
               xmlhttp.send();
            }
        
			function validatepassword(str) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("pwd").innerHTML = this.responseText;
                 }
               };
               xmlhttp.open("POST", "validpass.php?q=" + str, true);
               xmlhttp.send();
            }

			function validateemail(str) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("email").innerHTML = this.responseText;
                 }
               };
               xmlhttp.open("POST", "validemail.php?q=" + str, true);
               xmlhttp.send();
            }
              /*
			function validateage() {
				var x = document.forms["registration"]["age"].value;
				if(isNaN(x) || x < 5 || x > 90) {
					alert("Age should be in between 5 to 90");
				}
			} */

			function validatesex() {
				var a = document.forms["registration"]["sex"].value;
				var b = a.toLowerCase();
				if(!(b == "male" || b == "female" || b == "others")) {
					alert("Select between Male,Female and others");
				}
			}
			
			function myFunction() {
                document.getElementById("myForm").reset();
            }
			</script>
			<?php } ?>
<?php include "./footer.html" ?>
</body>
</html>