<html>
<head>
</head>
</html>
<?php
// Destroying All Sessions
if(isset($_COOKIE['username']))
{
    setcookie("username", "", time() - 3600);
    setcookie("userpass", "", time() - 3600);
    if(isset($_COOKIE['place'])){
        setcookie("place", "", time() - 3600);
    }
// Redirecting To Home Page
header("Location: l.php");
}
?>