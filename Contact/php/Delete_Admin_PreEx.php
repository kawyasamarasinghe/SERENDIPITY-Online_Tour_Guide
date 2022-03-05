<?php

include ('db_conn.php');
session_start();
if(isset($_POST['send']))
{
    $success = "";
    $error = "";

    $id = $_POST['id'];
 
    $query = "DELETE FROM preex WHERE id = '$id' LIMIT 1"; 

    $run = mysqli_query($conn,$query);

    if($run)
    {
        
        $success = "Deletion Successful :";
        header("Refresh:3; url=#");
    }
    else
    {
        $error = "Deletion Failed";
    }


}
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Delete Previous Experiences</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="../css/Admin_previous_ex.css">
    <link rel="stylesheet" type="text/css" href="../css/headeadminpre.css">
    <link rel="stylesheet" type="text/css" href="../css/Footer.css">
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
    <button class="button1" name="btn1 "><a class="logout" href="../../Register TourGuide/logoutTG.php" id="button1" ><b>Log Out</b></a></button>
       
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
<br><br>

<body>
    <center>

    <form action="Delete_Admin_PreEx.php" method="POST" >
            
            <br><br><br>
        <fieldset id="del" style="width: 630px; border-radius: 25px; background-color: #333;">

        <h3 class="title ">
            Delete Feedback
        </h3>
                    <div class="input-container">
                        <input type="id" name="id" class="input" required>
                        <label for=" ">ID</label>
                        <span>ID</span>
                    </div>
                    
                    <div class="input-container">
                        <input type="name" name="name" class="input" required>
                        <label for=" ">Name</label>
                        <span>Name</span>
                    </div>
                    <button class="butn" name="send">Submit</button>
        
    <center>
     
        &emsp;
       
        <br><br>
        <?php if(isset($error)){echo $error;} ?>
        <?php if(isset($success)){echo $success;} ?>
    </center>
    </div>
    <br><br>
</fieldset>
</center>
</form>
<br><br>
<script src="../js/previous_Experience.js "></script>
</body>
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