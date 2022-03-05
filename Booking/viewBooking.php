<?php

    session_start();
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "onlinetourguide";

    $conn = new mysqli($host,$dbUserName,$dbPassword,$dbName);

    $email = $_SESSION['tmail'];

    $sql = "SELECT * FROM booking WHERE touristEmail = '$email'";
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
    <title>View Booking</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/addBooking.css">
    <script src="JS/myscript.js"></script>
</head>

<body id="bookingBG" style="background-image: url('../Booking/Images/sunset-2570443_1920.jpg');" >
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
    <br><br>
        
   <div class="content" id="content" >
    <center>
        <h2 class="BookingHeaders" style="margin-left: 0px; font-family: Arial, Helvetica, sans-serif; color:rgb(255, 255, 255); font-size: 40px;">View Booking </h2>
        <br><br>
       
   <form action="addBooking.php" method="POST" >
    
        
    <fieldset class="bookingCont">

        <br><br>

        <p style="margin-right: -8px;">Tourist Email :  <input type="email" id="touristEmail" name="tmail" style=" width:250px;" required value="<?php echo $array['touristEmail'] ?>" readonly ></p><br>
        <p style="margin-left: 3px;">Tourist Name : <input type="text" id="touristName" name="tname" style="padding-right: 75px; margin-left:1px;" value="<?php echo $array['touristName'] ?>" readonly ></p><br>
        <p style="margin-right: 23px;">Country : <input type="text" name="country" style="padding-right: 4px;" value="<?php echo $array['country'] ?>" readonly ></p><br>
        <p style="margin-left: -3px;">Package Name : <input type="text" id="packageName" name="pname" style="width: 250px; " value="<?php echo $array['packageName'] ?>" readonly  ></p><br>
        <p style="margin-right: 23px;">Tour Guide Name : <input type="text" id="tgName" name="tgname" style="width:250px;" value="<?php echo $array['tourGuideName'] ?>" readonly ></p><br>
        <p style="margin-right: 21px;">Tour Guide Email : <input type="email" id="tgMail" name="tgmail" style="width:250px;" value="<?php echo $array['tourGuideEmail'] ?>" readonly  ></p><br>
        <p style="margin-left: 5px;">Payment Method : <input type="text" id="payment" name="payment" style=" width:275px;" value="<?php echo $array['paymentMethod'] ?>" readonly ></p><br>
        <p style="margin-left: -5px;">Date of Departure : <input type="text" id="dept" name="deptdate" style=" width:275px;" value="<?php echo $array['departureDate'] ?>" readonly ></p><br>
        <p style="margin-left: 22px;">Date of Return : <input type="text" id="arrive" name="arrivedate" style=" width:275px;" value="<?php echo $array['arrivalDate'] ?>" readonly ></p><br>
        <p style="margin-left: -54px;">Number Of Travellers : <input type="text" id="members" name="members" style="width: 250px; height: 25px;" value="<?php echo $array['members'] ?>" readonly  ></p>
            <br>  
            <br>
            

        
        <center>
            &emsp13;
            
                      
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        <br> 
        </div>
        <br> 
    </fieldset></center>
    </form>
    <center>
    <button id="delete" style="height: 50px; width: 100px; " class="btn1" name="delete"><a style="text-decoration: none; color:black" href="deleteBooking.php">Delete Booking</a></button> &emsp;
    <button id="edit" style="height: 50px; width: 100px; " class="btn1" name="edit"><a style="text-decoration: none; color:black" href="editBooking.php">Edit<br> Booking</a></button> &emsp; 
    <button id="edit" style="height: 50px; width: 100px; " class="btn1" name="edit"><a style="text-decoration: none; color:black" href="../Contact/Paymnet.html">Proceed to<br> Payment</a></button>
        </button> 
    </center>
    <br>
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
