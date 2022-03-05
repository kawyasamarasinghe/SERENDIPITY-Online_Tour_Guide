<?php

include ('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $success = "";
    $error = "";

    $email= $_POST['email'];
 
    $query = "DELETE FROM  register where email = '$_POST[email]' LIMIT 1"; 

    $query_run = mysqli_query($con,$query);

    if ($query_run)
    {
        
        $success = "Account Delete Successful !<br> We Are Sorry To See You Go !!";
        header("location:../Register Tourist/CreateAccountTourist.php");
    }
    else
    {
        $error = "Account Deletion Failed";
    }


}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete Account Tourist</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="./deleteacc.css">
</head>
<body>
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
            <a class="log" href="../Home/home.html"><img id="logo" src="images/logo.jpg" alt="logo"></a>
    
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
    <center>
        <div class="deleteACC"> 
            <div class="container">
        <form action="deleteAccountTO.Php" method="POST" >
            <h1>Delete Profile</h1><br>
            <h2>Tourist</h2><br><br>
            
            <p>Enter Your email here : <input type="email" id=email name = "email" required></p>
             
            <br><br>

        
       
            <button type="submit" class="submit" name="submit">Delete Profile</button>
            <button type="reset" class="reset">Reset</button>
            <br><br>
            
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        </div>
    
    </form>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </div> 
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


