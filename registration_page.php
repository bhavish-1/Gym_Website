<html>
<head>
<title> registration </title>
</head>
<body>
    <center>
        <?php

$conn = mysqli_connect("localhost", "root", "", "gymwebsite");
if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
}

$name = $_REQUEST['myname'];
$age = $_REQUEST['myage'];
$email = $_REQUEST['myemail'];
$weight = $_REQUEST['myweight'];
$gender =$_REQUEST['mygender'];
$membership = $_REQUEST['mymembership'];
$timings =$_REQUEST['mytiming'];
$password =$_REQUEST['mypassword'];
$phonno =$_REQUEST['myphonno'];

$sql = "INSERT INTO registration_page(Name, Age, Timings, weight, email, gender, membership_months, password, phone_no) values('$name', $age,'$timings',$weight,'$email', '$gender','$membership','$password', '$phonno')";

if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully. </h3>"; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
   ?>
   
   </center>
   </body>
   </html>
   