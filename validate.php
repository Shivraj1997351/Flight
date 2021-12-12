<?php
include('d.php');
$q = $_REQUEST["q"];
$response = "";
$query = "SELECT * FROM users WHERE username = '$q'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1){
  $response = "Username already exist";
}
echo $response === "" ? "" : $response;
?>