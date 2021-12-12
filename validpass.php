<?php
$password = $_REQUEST['q'];
$response1 = "";
if (preg_match("^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9].*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{9}^", $password )){
$response1 = "";
}
else{
    $response1 = "Password must have length of  9 containing 1 uppercase letter,3 lower case letter,4 digits between[0-9], and one special symbol";
}

echo $response1 === "" ? "" : $response1;
?>