<html lang="en">
<head>
<title>Home</title>
<?php include "./head.html" ?>
</head>
<body>
    <?php include "./header.html" ?>
    <?php
            require('d.php');
            $username = stripslashes($_POST['username']);
            $username = mysqli_real_escape_string($con,$username);
            $email  =  $_POST['email'];
            $query = "SELECT * FROM users WHERE username='$username' and email='$email'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
              if($rows==1){
                $name=$username;
				$semail = "u18co109@coed.svnit.ac.in";
                $headers = "From: <" . $email . ">\n";
                $headers .= "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=utf-8\n";
                $headers .= "Return-Path: " . $email . "\n";
                $headers .= "X-Mailer: PHP/" . phpversion();
                $subject = "Recovery of Password";
                $query="SELECT password FROM users where username='$name'";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);
                $message = $row['password'];
                if (mail($email, $subject, $message, $headers)) {
                        echo"<div class='card'><div class='card-body text-center'><h3 style='color:red;'>Password sent Successfully check your mails</h3><a href='l.php' style='text-decoration:none;'>Login</a></div></div>";
						
                }
                
                 }
			  else
			     {
                  echo"<div class='card'><div class='card-body text-center'><h3 style='color:red'>You are not a Registered Person</h3></div></div>";
                 }
         
    ?>

<br><br>	
<?php include "./footer.html" ?>
</body>
</html>
