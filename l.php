<html lang="en">
<head>
<title>Login page</title>
<?php
if(isset($_COOKIE["username"])){
header("Location: index.php");
 }
?>
<?php include "./head.html" ?>
</head>
<body class="example">

<?php include "./header.html" ?>
	

<?php
require('d.php');
if (isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$query = "SELECT * FROM users WHERE username='$username'
and password='$password'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1){
setcookie ("username", $username, time()+ (86400 * 30));
setcookie ("userpass", $password, time()+ (86400 * 30));
header("Location: index.php");
}
else{
	echo "<div class='card'><div class='card-body text-center'><b style='color:red;margin-left:10px;'>Wrong username or password</b></div></div>";?>
<?php
}   
}
else{
?>
<div class="container mt-5">
  <div class="col-sm-6 col-sm-offset-3">
    <form action="" method="post" name="login" id="myForm" class="jumbotron shadow p-5">
         <h3 class="text-info text-center">Login</h3> 
         <div class="form-group">
         <input type="text" name="username" placeholder="Enter username" class="form-control" value='<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>' onkeyup="validateuser(this.value)"  required />
         <p style="color:red;"><span id="username"></span></p>
         </div>
         <div class="form-group">
         <input type="password" name="password" id="password" class="form-control" value='<?php if(isset($_COOKIE["userpass"])) { echo $_COOKIE["userpass"]; } ?>'  placeholder="Enter password" required >
         </div>
         <div class="form-group mt-2">
         <button name="submit" type="submit" class="btn btn-primary btn-sm">Login</button>
		 <button type="reset" class="btn btn-warning btn-sm mx-2" onclick="myFunction()">Reset</button>
		 <i class="far fa-eye mx-2 mt-2" id="togglePassword"></i>
         </div>
         <div class="form-group">
         <p><b style="color:red;">New User?</b> <a href='r.php' style="text-decoration:none;"> <b>Sign up</b></a></p>
         <a href='pass.php' style="text-decoration:none;"><b>Forgot Password?</b></a>
         </div>
    </form>
 </div>
</div>

<?php } ?>
<?php include "./footer.html" ?>
</body>
<script>
            function validateuser(str) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("username").innerHTML = this.responseText;
                 }
               };
               xmlhttp.open("POST", "validatepass.php?q=" + str, true);
               xmlhttp.send();
            }
			
            
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
             const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
             password.setAttribute('type', type);
             // toggle the eye slash icon
             this.classList.toggle('fa-eye-slash');
});

function myFunction() {
  document.getElementById("myForm").reset();
}


</script>
</html>