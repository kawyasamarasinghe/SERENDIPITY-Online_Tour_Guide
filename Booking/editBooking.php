<?php

include ('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $success = "";
    $error = "";

    $email= $_POST['tmail'];


 
    $query = "UPDATE booking SET  touristEmail = '$_POST[tmail]', touristName = '$_POST[tname]' , country = '$_POST[country]', packageName = '$_POST[pname]', tourGuideName = '$_POST[tgname]', TourGuideEmail = '$_POST[tgmail]',paymentMethod= '$_POST[payment]',departureDate= '$_POST[deptdate]',arrivalDate= '$_POST[arrivedate]',members= '$_POST[members]' where touristEmail = '$_POST[tmail]'"; 

    $run = mysqli_query($conn,$query);

    if($run)
    {
        
        $success = "Booking Update Successful";
        header("Refresh:3; url=viewBooking.php");
    }
    else
    {
        $error = "Booking Update Failed";
    }


}
    $conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Booking</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/addBooking.css">
    <script src="JS/myscript.js"></script>
</head>

<body id="editBookingBG" style="background-image: url(../Booking/Images/caravansary-4519435_1920.jpg); background-size: cover;" >
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
        <h2 class="BookingHeaders" style="margin-left: 0px; font-family: Arial, Helvetica, sans-serif; color:rgb(255, 255, 255); font-size: 40px;">Edit Booking </h2>
        <br><br>
       
   <form action="editBooking.php" method="POST" >
    
        
    <fieldset class="bookingCont">

        <br><br>
        
        
        <p style="margin-right: -5;">Enter Tourist Email :  <input type="email" id="touristEmail" name="tmail" style=" padding-right: 75px;" required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}"></p><br>
        <p style="margin-left: 3px;">Enter Tourist Name : <input type="text" id="touristName" name="tname" style="padding-right: 75px; margin-left:1px;" required></p><br>
        <div class="country" id="country" ></div>
            <p style="margin-right: 23px;">Enter Country :
            <select name="country" style="padding-right: 75px;" required>
                <option value="country">Choose</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Italy">Italy</option>
                <option value="Brazil">Brazil</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Dubai">Dubai</option>
            </select>
            </p><br>
        <p style="margin-left: -7px;">Enter Package Name : <input type="text" id="packageName" name="pname" style="width: 250px; " required ></p><br>
        <p style="margin-right: 30px;">Enter Tour Guide Name : <input type="text" id="tgName" name="tgname" style="padding-right: 75px;" required></p><br>
        <p style="margin-right: 26px;">Enter Tour Guide Email : <input type="email" id="tgMail" name="tgmail" style="padding-right: 75px;" required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}" ></p><br>
        <p style="margin-left: 0px;">Enter Payment Method : <input type="text" id="payment" name="payment" style=" padding-inline:50px;" required></p><br>
        <p style="margin-left: 18px;">Date of Departure : <input type="date" id="dept" name="deptdate" style=" padding-inline:50px;" required></p><br>
        <p style="margin-left: 45px;">Date of Return : <input type="date" id="arrive" name="arrivedate" style=" padding-inline:50px;" required></p><br>
        <p style="margin-left: -10px;">Number Of Travellers : <input type="text" id="members" name="members" style="width: 250px; height: 25px;" required ></p>
            <br>  
            <br>
            <br>

        
        <center>
            &emsp13;
            <button id="submit" type="submit" class="btn1" name="submit">Submit</button>
            &emsp14;
            <button type="reset" class="btn1" >Reset</button>
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        <br> <br>
        </div>
        <br> 
    </fieldset></center>
    </form>
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

