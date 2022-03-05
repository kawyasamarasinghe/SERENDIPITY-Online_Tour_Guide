<?php

include ('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $success = "";
    $error = "";

    $email= $_POST['tmail'];
 
    $query = "DELETE FROM booking where touristEmail = '$email' LIMIT 1"; 

    $run = mysqli_query($conn,$query);

    if($run)
    {
        
        $success = "Booking Deletion Successful :";
        header("Refresh:3; url=#");
    }
    else
    {
        $error = "Booking Deletion Failed";
    }


}
    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Booking</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/addBooking.css">
        <script src="JS/myscript.js"></script>
    </head>

    <body class="delete" style="background-image: url(../Booking/Images/daisies-5071405_1920.jpg);">

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
    <center>
            <h1 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: azure;">Delete Booking</h1>
        <div>
        <form action="deleteBooking.php" method="POST" >
            
                <br><br><br>
            <fieldset id="del" style="width: 850px; border-radius: 25px; background-color: rgb(255, 255, 221,0.7);">

            
            
            <br><br>

            <p>Enter Your booking email here : <input type="email" id=email name = "tmail" style="padding-right: 100px;" required></p>
             
            <br><br>

        
        <center>
            <button type="submit" id="submit" name="submit" class="btn1" >Delete</button>
            &emsp;
            <button type="reset" class="btn1">Reset</button>
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        </div>
        <br><br>
    </fieldset>
    </center>
    </form>
        <br><br><br>
        </div> <div id="footer1">
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