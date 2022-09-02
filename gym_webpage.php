<html lang="en"><head>
    
    <title>gym website</title>
    <link rel="stylesheet" href="cssfile.php">
</head>
<body>
    <form action="registration_page.php" method="Post">
    <div class="navbar">
        <a class="logo" href="#"> gym website </a>
        <ul class="nav">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About us </a></li>
    <li><a href="#register">registraion page </a></li>
    <li><a href="#services">services</a></li>
    <li><a href="#login">Login</a></li>
    </ul>
    </div>
    <section class="banner-area" id="home">
    </section>
    
    <section class="about-area" id="about">
        <div class="text-part">
            <h1> About us </h1>
                <p>One very important thing that  The Gym want to do is make fitness interesting, make it your playground so that you enjoy it, you look forward to coming back and working out. Because if it is boring, if it’s something you’re not enjoying, you may probably end up doing it for a month; after that you’ll slowly start dropping out, and that’s what happens everywhere.

                    At all the centers, classes are available from 6am – 10pm, with the slots between 6pm and 8pm being the busiest. The sessions are led by a team of more than 20 trainers. who try to provide individual attention among groups of 150-200 people <br>
                    <br>
                    
                 
    </p></div>
    </section>
    
    <section class="registration-page" id="register">
        <div class="text-part">
            <h1>Register Now  </h1>
    <form action="mygym .sql">
        <div>
        <tr><td>
            <label for="name"> Enter your name </label>
            <input type="text" name="myname" id="name">
            </tr></td>
        </div>
        <br>
        <div>
        <tr><td>
            <label for="age">Enter your age</label>
            <input type="number" name="myage" id="age">
            </tr></td>
        </div>
        <br>
        <div>
        <tr><td>
            <label for="gender">Choose your gender</label>
            <input type="radio" name="mygender" value="male" id="gender">male 
            <input type="radio" name="mygender" value="female" id="gender" >female
            </tr></td>
        </div>
       
        <br>
        <div>
        <tr><td>
            <label for="weight">Enter your weight</label>
            <input type="number" name="myweight" id="weight">
            </tr></td>
        </div> 
        <br> <br>
        <div>
        
        <tr><td> <label for="email">Enter your email address</label>
            <input type="email" name="myemail" id="email">
            </tr></td>
        </div>
        <br>
        <div> 
        <tr><td>
        <label for="password">Set your password </label>
            <input type="password" name="mypassword" id="password">
        </div><br>
        <div>
        <tr><td>
         <label for="phoneno">Phone number</label>
            <input type="text" name="myphonno" id="phoneno">
            </tr></td>
        </div>
        <br>
        <div>
        <tr><td>
            <label for="membership">Select your membership</label>
            <select name="mymembership" id="membership">
                <option value="1 month">1 months </option> 

                <option value="6 months">6 months </option>
                <option value="12 months">12 months </option>
            </select>
            </tr></td>
        </div> 
        <br>
        <div>
        <tr><td>
            <label for="timings">Select your timmings </label>
            <select name="mytiming" id="timings">
                <option value="6 to 7 am">6 to 7 am</option>
                <option value="7 to 8 am">7 to 8 am</option>
                <option value="6 to 7 pm">6 to 7 pm</option>
                <option value="7 to 8 pm">7 to 8 pm</option>
            </select>
            </tr></td>
        </div> <br>
        <div>
        <tr><td>
            <input type="submit" name="mysubmit ">
            <input type="reset">
            </tr></td>


        </div>

        


    </form>  
    </div>
    </section>
    
    <section class="service-area" id="services">
        <div class="text-part">
            <h1> Services </h1>
            <div class="columns">
    <ul class="price">
      <li class="header">1 MONTH</li>
      <li class="grey">Rs.2,000</li>
      <img class="img" src="https://images.pexels.com/photos/3757376/pexels-photo-3757376.jpeg?cs=srgb&amp;dl=pexels-andrea-piacquadio-3757376.jpg&amp;fm=jpg" alt="">
     
    
    </ul>
  </div>
  
  <div class="columns">
    <ul class="price">
      <li class="header" style="background-color:#04AA6D">6 MONTHS</li>
      <li class="grey">Rs. 10,000</li>
      <img class="img" src="https://images.pexels.com/photos/3838339/pexels-photo-3838339.jpeg?cs=srgb&amp;dl=pexels-andrea-piacquadio-3838339.jpg&amp;fm=jpg" alt="">
  
      
     
    </ul></div>
  
  
  <div class="columns">
    <ul class="price">
      <li class="header">12 MONTHS</li>
      <li class="grey">Rs.20,000</li>
      <img class="img" src="https://images.pexels.com/photos/260352/pexels-photo-260352.jpeg?cs=srgb&amp;dl=pexels-pixabay-260352.jpg&amp;fm=jpg" alt="">
      
    </ul>
    
  </div>
 
    </div>
    </section>
    
    <section class="contact-area" id="contact">
        <div class="text-part">
           
    
        <section class="login-area" id="login">
            <h1>Login</h1> <id=>
    <form action="login_code.php" method="GET">
    <div>
        <label for="email">enter your email id</label>
        <input type="email" name="myemail" id="email">
    </div> 
    <br>
    <div>
        <label for="password">enter your password</label>
        <input type="password" name="mypassword" id="password">
    </div> 
    <br>
    <div>
         <button> login </button>
</div>
</section>
</body>
</html>