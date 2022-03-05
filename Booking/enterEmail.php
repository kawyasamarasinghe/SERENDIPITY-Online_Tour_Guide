<?php
    if(isset($_POST['submit']))
    {
        session_start();	
        include('connection.php');
        


        $success="";
        $error="";

        if(empty($_POST['tmail']))
            {
	            $error="Please enter the email !!";
            }
        
        else
        {
                $email=$_POST['tmail'];	
                

                $sql="SELECT * FROM booking WHERE touristEmail='$email'";

                $result=mysqli_query($conn,$sql) or die("Your query is not right");
               

                if(!$row = mysqli_fetch_assoc($result))
                    { 
                        $error = "You have entered wrong Email !! <br> or <br> You do not have a Booking  !!!";
                    }
                 else
                    {
                        $_SESSION['tmail']=$email;
			            
                        header("Refresh:3; url=viewBooking.php");
                        $success="Success !!!";
        
                    }
        }
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Look For Booking</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/addBooking.css">
    <script src="JS/myscript.js"></script>
</head>

<body id="emailBG" style="background-image: url('../Booking/Images/envelope-3172770__340.webp');">
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
            
            </div>
            <a class="log" href="../Home/home.html"><img id="logo" src="../pageselect/Images/logo.jpg" alt="logo"></a>
    
            <ul class="nav-ul">
                <li><a id="nav"  href="../Home/home.html">Home</a></li>
                <li><a id="nav" href="../Stars/AboutUs.php">About Us</a></li>
                <li><a id="nav" href="../Contact/php/send.php">Contact Us</a></li>
                <li><a id="nav" href="../Packages/Packages.html">Packages</a></li>
                <li><a id="nav" href="https://edition.cnn.com/">News</a></li>
                <li><a id="nav" href="https://www.google.com/">Search</a></li>
            </ul>
    
        </nav>
    </div>
    <br><br><br>
    <br>
    <br>
        
   <div class="content" id="content" >
    <center>
        <h2 class="BookingHeaders" style="margin-left: 0px; font-family: Arial, Helvetica, sans-serif; color:rgb(36, 36, 36); font-size: 40;">Enter Email </h2>
        <br><br>
       
   <form action = "enterEmail.php" method="POST" >
    
        
    <fieldset class="bookingCont">

        <br><br>
        
        
        <p style="margin-right: 26px;">Enter Email : <input type="email" id="tMail" name="tmail" style="width: 275px;" required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}" ></p><br>
       
              
           
            <br>

        
        <center>
           
            <button id="submit"  class="btn1" name="submit">Submit</button>
            &emsp14;
            <button type="reset" class="btn1" >Reset</button>
            
            <br><br>
            <?php 
                if(isset($error))
                    {
                        echo $error;
                    }
                if(isset($success))
                    {
                        echo $success;
                    } 
                
            ?>
        </center>
        <br> <br>
        </div>
        <br> 
    </fieldset></center>
    </form>
    <br>
    <center>
        <a href="addBooking.php">
            <button class="btn1" > Back</button>
        </a>
    </center>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>
    <div id="footer1">
        <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
        <p class="add"><span class="sp">Our Destinations</span><br/><br/><a class="foot" href="../Countries/Sri Lanka.html">Sri Lanka</a><br/><a class="foot" href="../Countries/Italy.html">Italy</a><br/><a class="foot" href="../Countries/Brazil.html">Brazil</a>
        <br><a class="foot" href="../Countries/New Zealand.html">New Zealand</a><br><a class="foot" href="../Countries/Dubai.html">Dubai</a><br> </p>
        
        <p class="add"><span class="sp">Categories</span><br/><br/><a class="foot" href="https://www.internationaltraveller.com/world/worlds-absolute-must-do-festivals/">Events</a><br/><a class="foot" href="../Gallery/galllery.html">Gallery</a><br/><a class="foot" href="../Stars/AboutUs.php">Ratings</a><br/><a class="foot" href="../Serendipity/Guideavailable.php">Featured</a><br/><a class="foot" href="../Contact/php/Previous_ex.php">Feedback</a> 
    </p>
  
    <p class="add"><span class="sp">Serendipity</span><br/><br/><a class="foot" href="../Stars/AboutUs.php">About Us</a> <br><a class="foot" href="../Packages/Packages.html">Explore</a><br/><a class="foot" href="../Contact/php/send.php">Contact Us</a><br/><a class="foot" href="../Gallery/ppolicy.html">Security and Safety</a>
        <br/><a class="foot" href="../Gallery/ppolicy.html">Privacy Policy</a></p>
    <!--  <p class="a"><span class="flo" >FOLLOW US</span> </p><br/>-->
  
  
    <div class="f-logo">
       <a href="../Home/home.html"> <img id="f-logo" src="../pageselect/Images/logo.jpg" alt="f_logo"></a>
    </div>
  </div>
    </body>
</html>
