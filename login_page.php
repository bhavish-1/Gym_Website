<?php
session_start();
?>
<html lang="en"><head>
    
    <title>login page</title>
    <link rel="stylesheet" href="login_pagecss.php">
</head>
<body>
<?php
     $conn=mysqli_connect("localhost", "root", "","gymwebsite");
     if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
  $email=$_SESSION["emailid"];
  $sql = "SELECT * FROM registration_page WHERE email ='$email'";
  if ($result = $conn -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      $name=$row[1];
      $age=$row[2];
      $weight=$row[4];
      $gender=$row[6];
      $timming=$row[3];
      $member=$row[7];
    }
    $result -> free_result();
  }
  
  mysqli_close($conn);
    ?>
<form action="login_code.php" method="GET">
    <div class="navbar">
        <a class="logo" href="#"> gym website </a>
        <ul class="nav">
    <li><a href="#details">details  </a></li>
    <li><a href="#diet">diet plan</a></li>
    <li><a href="#contact">contact us </a></li>
    </ul>
    </div>
   
    
    
    <section class="detail-page" id="details">
        <div class="text-part">
            <form action="mygym.sql"> 
                <div class="text-part">
                    <h1>DETAILS</h1>
                    <div>
                    <label for="name">Name</label>
                    <input type="text" value=<?php echo $name;?> name="myname " id="name">
                </div>
                <br>
                <div>
                    <label for="age">Age</label>
                    <input type="text" value=<?php echo $age;?> name="myage" id="age">
                </div>
                <br>
                <div>
                    <label for="gender">Gender</label>
                    <input type="text" value=<?php echo $gender;?> name="mygender" id="gender"> 
                </div>
                
                <br>
                <div>
                    <label for="weight">Weight</label>
                    <input type="text" value=<?php echo $weight;?> name="myweight" id="weight">
                    
                </div> 
                <br> 
               
                
                <div>
                    <label for="membership">Membership</label>
                    <input type="text" value=<?php echo $member;?> name="mymembership" id="membership">
                </div> 
                <br>
                <div>
                    <label for="timings"> Timmings </label>
                    <input type="text" value=<?php echo  $timming;?> name="mytiming" id="timings">
                    
                </div>   
    </div></form></div></section>
    
    <section class="diet-plan" id="diet">
       
   
    
    
    
    </section>
    
    <section class="contact-area" id="contact">
        <div class="text-part">
            <h1>CONTACTS OF YOUR GYM TRAINER </h1>
            <h1>+91 7337421621</h1>
            <h1>+91 7042277279</h1>
    
    </div>
    </section>
    
    



</body>
</html>