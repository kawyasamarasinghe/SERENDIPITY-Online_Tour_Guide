<?php

include ('connection.php');
session_start();
if(isset($_POST['btn3']))
{
    $success = "";
    $error = "";

    $email= $_POST['email'];
 
    $query = "UPDATE register SET  fname = '$_POST[fname]', lname = '$_POST[lname]' , bio = '$_POST[bio]' WHERE email ='$_POST[email]'"; 

    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        $success = "Your Account Update Successful :)";
        header("location:../Register Tourist/TouristViewAccount.php");
    }
    else
    {
        $error = "Your Account Update Failed :(";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile Tourist</title>
    <link rel="stylesheet" href="./editacc.css">
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="css/Footer.css">
    

    <script src="../Packages/js/script.js"></script>
</head>

<body id="pkbg"  >
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
            
            <button class="button1" name="btn1 "><a href="../Register TourGuide/logoutTG.php" id="button1">Log Out</a></button>
            </div>
            <a class="log" href="../Home/home.html"><img id="logo" src="Images/logo.jpg" alt="logo"></a>
    
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
    

    
   
   
        <div class="border">
            <center>
            <div class="container">            
                
        
        <form action="editAccountTO.php" method="POST" >
        
            <h1>Edit Profile</h1>
            <h2>Tourist</h2><br><br>
            
            <p>Enter Your email : <input type="email"  name = "email" required></p>
            <br>
             <p>First Name : <input type="text"  name="fname" required></p>
             <br>
             <p>Last Name : <input type="text"  name="lname"required></p>
             <br>
            <p>New Password : <input type="password"  name="createPW"></p>
            <br>
            <p>Confirm Password : <input type="password"  name="confirmPW"></p>
            <br>
            <label style="margin-right:200px;">Enter your Bio :</label>
            <br>
            <textarea name="bio"  placeholder="Enter Your Bio here"></textarea>
       

            
            <br><br>

        
        
            <button type="submit" class="submitcss"  name="btn3">Update Profile</button>
            <button type="reset" class="reset">Reset</button>
            <br>
            <br><br>
            <button name="back" value="back" name="back" class="back"><a href="TouristViewAccount.php">Back</a></button>
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        </div>
    </form>

        </div> 

        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
  