<?php

include ('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $success = "";
    $error = "";

    $email= $_POST['email'];
 
    $query = "DELETE FROM regtourguide where email = '$_POST[email]' LIMIT 1"; 

    $run = mysqli_query($conn,$query);

    if($run)
    {
        
        $success = "Account Deletion Successful !<br> We Are Sorry To See You Go !!";
        header("Refresh:3; url=create account TourGuide.php");
    }
    else
    {
        $error = "Account Deletion Failed";
    }


}
    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tour Gude Delete Account</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="css/deleteAccountTG.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css"> 
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <script src="JS/myscript.js"></script>
    </head>

    <body class="delete">

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
    <br><br>
        <div>
        <form action="deleteAccountTG.php" method="POST" >
            <center>
                <br><br><br>
            <fieldset id="del">
            <br>
            <h1>Delete Profile</h1>
            <h2>Tour Guide</h2>
            
            <br><br>

            <p>Enter Your email here : <input type="email" id=email name = "email" style="padding-right: 100px;" required></p>
             
            <br><br>

        
        <center>
            <button type="submit" id="submit" name="submit" class="delACTG" >Delete Profile</button>
            &emsp;
            <button type="reset" class="delACTG">Reset</button>
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        </div>
        <br>
    </fieldset>
    </center>
    </form>
    <br><br><br><br><br><br>
        
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
