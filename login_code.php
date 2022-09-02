<?php
session_start();
?>
<html>
<head>
<title> login page </title>
</head>
<body>
<center>
   <?php

   $conn=mysqli_connect("localhost", "root", "","gymwebsite");

   if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

$email= $_REQUEST['myemail'];
$password= $_REQUEST['mypassword'];

$sql = "SELECT * FROM registration_page WHERE email ='$email' AND password='$password'";

$_SESSION["emailid"] = $email;

if($result=mysqli_query($conn, $sql))
{
if(mysqli_num_rows($result)>0)
{
    header("Location: http://localhost/GYMWEBSITE/login_page.php#diet");
} 
else
echo"invalid details";

}

mysqli_close($conn);

?>
</body>
</html>
