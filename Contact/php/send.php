<?php
if(isset($_POST['submit']))
{
    $error = "";
    $success = "";
    $conn = mysqli_connect("localhost","root","","onlinetourguide") or die("Database connection error");

    if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['message']))
    {
        $error = "Submission Failed !";
    }
    
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        
        $message = $_POST['message'];

            if(empty($error))
            {
                $sql = "INSERT Into contactus (name,email,message) values ('$name','$email','$message')";
               
                $result=mysqli_query($conn,$sql);
                
                if($result)
                {
                    $success = "Your message was sent Successfuly !!";
                    echo "Your message was sent Successfuly !!";
                }
            
            }
            else
            {
                echo $error;
            }
            $conn->close();   
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Contact Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.jpg">
    <link rel="stylesheet" href="../css/ContactUs.css">
    <link rel="stylesheet" href="../css/sendhead.css">
    <link rel="stylesheet" href="../css/Footer.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<div>
<div class="fdiv">
    
    </div>
    <!--NAVIGATION BAR-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <div class="btn ">
    <a href="../../pageselect/registerSelector.html"><button class="button1" name="btn1 "><b>Register</b></button></a>
        <a href="../../pageselect/LoginSelector.html"><button class="button1" name="btn1 "><b>Login</b></button></a>
       
    </div>
    <a class="log" href="../../Home/home.html"><img id="logo" src="../Images/logo.jpg" alt="logo"></a>

    <ul class="nav-ul">
                <li><a id="nav"  href="../../Home/home.html">Home</a></li>
                <li><a id="nav" href="../../Stars/AboutUs.php">About Us</a></li>
                <li><a id="nav" href="../../Contact/php/send.php">Contact Us</a></li>
                <li><a id="nav" href="../../Packages/Packages.html">Packages</a></li>
                <li><a id="nav" href="https://edition.cnn.com/">News</a></li>
                <li><a id="nav" href="https://www.google.com/">Search</a></li>
            </ul>

    </nav>
</div>

  

<body>
    <div class="container">
        <span class="big-circle"></span>
        <span class="small-circle"></span>
        <span class="smaller-circle"></span>
        <span class="smaller1-circle"></span>
        <span class="smaller2-circle"></span>
        <span class="smaller3-circle"></span>
        <span class="smaller4-circle"></span>
        <span class="smaller5-circle"></span>
        <span class="smaller6-circle"></span>
        <div class="form">
            <div class="contact-info">

                <h3 class="title">
                    <b>We are available 7 days a week, 24 hours a day...</b><br><br>
                </h3>
                <div class="info">
                    <div class="information">
                        <img src="../Images/phone.jpg" class="icon" alt="" />
                        <p>
                            <b> Phone  </b> <br>0112436745</p>
                    </div><br>
                    <div class="information">
                        <img src="../Images/email.jpg" class="icon" alt="" />
                        <p> <b>Email-Address</b>
                            <br>my.serendipity@gmail.com</p>
                    </div><br>
                    <div class="information">
                        <img src="../Images/location.png" class="icon" alt="" />
                        <p> <b>Location</b><br>
                        </p>
                    </div><br>
                </div>

            </div>
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="send.php" method="POST">
                    <h3 class="title ">Contact Us</h3>
                    <div class="input-container ">
                        <input type="text " name="name" class="input " required>
                        <label for=" ">Name</label>
                        <span>Name</span>
                    </div>
                    <div class="input-container ">
                        <input type="email" name="email" class="input " required>
                        <label for=" ">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for=" ">Message</label>
                        <span>Message</span>
                    </div>
                    <button class="butn" value="Submit" name="submit" >Submit</button>
                
                </form>
            </div>
        </div>

    </div>
    <script src="../js/Contact_us.js"></script>
</body>
<br>
<div id="footer1">
        <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
        <div id="footer1">
    <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
    <p class="add"><span class="sp">Our Destinations</span><br/><br/><a class="foot" href="../../Countries/Sri Lanka.html">Sri Lanka</a><br/><a class="foot" href="../../Countries/Italy.html">Italy</a><br/><a class="foot" href="../../Countries/Brazil.html">Brazil</a>
        <br><a class="foot" href="../../Countries/New Zealand.html">New Zealand</a><br><a class="foot" href="../../Countries/Dubai.html">Dubai</a><br> </p>

        <p class="add"><span class="sp">Categories</span><br/><br/><a class="foot" href="https://www.internationaltraveller.com/world/worlds-absolute-must-do-festivals/">Events</a><br/><a class="foot" href="../../Gallery/galllery.html">Gallery</a><br/><a class="foot" href="../../Stars/AboutUs.php">Ratings</a><br/><a class="foot" href="../../Serendipity/Guideavailable.php">Featured</a><br/><a class="foot" href="../../Contact/php/Previous_ex.php">Feedback</a> 
    </p>
  
    <p class="add"><span class="sp">Serendipity</span><br/><br/><a class="foot" href="../../Stars/AboutUs.php">About Us</a> <br><a class="foot" href="../../Packages/Packages.html">Explore</a><br/><a class="foot" href="../../Contact/php/send.php">Contact Us</a><br/><a class="foot" href="../../Gallery/ppolicy.html">Security and Safety</a>
        <br/><a class="foot" href="../../Gallery/ppolicy.html">Privacy Policy</a></p>
    <!--  <p class="a"><span class="flo" >FOLLOW US</span> </p><br/>-->
  
  
    <div class="f-logo">
       <a href="../../Home/home.html"> <img id="f-logo" src="../../pageselect/Images/logo.jpg" alt="f_logo"></a>
    </div>
  </div>
  
   
</body>

</html>


