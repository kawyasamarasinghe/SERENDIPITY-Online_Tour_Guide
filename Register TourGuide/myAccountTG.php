<?php

    session_start();
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "onlinetourguide";

    $conn = new mysqli($host,$dbUserName,$dbPassword,$dbName);

    $email = $_SESSION['email'];
   
    $sql = "SELECT * FROM regtourguide WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
    
    if($rows>0)
    {
        $array = mysqli_fetch_assoc($result);
    }

    $conn->close();


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tour Guide Account</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="css/myAccountTG.css">
        <link rel="stylesheet" type="text/css" href="css/myAccountTGHead.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <script src="JS/myscript.js"></script>
         
    </head>
    
    <body id="AccountBG">
        
    <!--NAVIGATION BAR-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
        <div class="btn ">
            <button class="button1" name="btn1 "><a href="../Register TourGuide/logoutTG.php" id="button1"><b>Log Out</b></a></button>
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
    <div>
        
        
    <center>
       <br>
    
       <div class="content" id="content">

        
        <br><br><br><br>
   <div>
   <form method="POST" action="">
        <fieldset class="TGprofile">
            <br><br>
        <center>
            <h1>My Profile</h1>
            <h2>Tour Guide</h2>
        </center>
        <br></br>
            <p style="margin: left 2px;">First Name : <input type="text" value="<?php echo $array['firstName'] ?>" readonly style="width:200px"></p><br>
            <p style="margin-left: 4px;">Last Name : <input type="text" value="<?php echo $array['lastName'] ?>" readonly style="padding-right: 25px;"></p><br>
            <p style="margin-right: 35px;">Date of Birth : <input type="text" value="<?php echo $array['dob'] ?>" readonly></p><br>
            <p style="margin-left: 45px; ">Email : <input type="email" value="<?php echo $array['email'] ?>" readonly style="width:200px;"></p><br>
            <p style="margin-right: 65px;">Passport Number : <input type="text" value="<?php echo $array['passportno'] ?>" readonly></p><br>
            <p style="margin-left: 0px;">Country : <input type="text" value="<?php echo $array['country'] ?>" readonly></p><br>
            <p p style="margin-left: 5px;">Gender : <input type="text" value="<?php echo $array['gender'] ?>" readonly></p><br>
            <p><label >Bio : <input type="text" value="<?php echo $array['bio'] ?>" readonly  style="margin-right: -31px;"></label></p><br>
            <p >Experience As a Tour Guide : <input type="text" value="<?php echo $array['experience'] ?>" readonly style=" padding-right:50px;"></p><br>
            <br>

            &emsp;
        <button id="Edit" class="manage" name="edit" value="edit" ><a href="editAccountTG.php" class="e1">Edit Profile</a></button>
        &emsp;
        <button id="Delete" class="manage" name="delete" value="delete"><a href="deleteAccountTG.php" class="e1"> Delete Profile </a></button>
        <br>
        <br>
        </fieldset>
    </form>
    
        <br><br>
        <br><br>
        <br><br>
    </center>
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