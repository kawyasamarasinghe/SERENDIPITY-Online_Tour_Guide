<?php


if(isset($_POST['submit']))
{
    $error = "";
    $success = "";

    include('connection.php');


    if(empty($_POST['tmail'])||empty($_POST['tname'])||empty($_POST['country'])||empty($_POST['pname'])||empty($_POST['tgname'])||empty($_POST['tgmail'])||empty($_POST['payment'])||empty($_POST['deptdate'])||empty($_POST['arrivedate'])||empty($_POST['members']))
    {
        $error = "Please enter all the details first !";
    }
    
        $touristEmail = $_POST['tmail'];       
        $touristName = $_POST['tname'];       
        $country = $_POST['country'];
        $packageName = $_POST['pname'];    
        $tourGuideName = $_POST['tgname'];
        $tourGuideEmail = $_POST['tgmail'];       
        $payment =$_POST['payment'];       
        $deptDate =$_POST['deptdate'];     
        $arriveDate = $_POST['arrivedate'];      
        $members = $_POST['members'];
      
            $sql = "SELECT * FROM booking WHERE touristEmail = '$touristEmail' OR tourGuideEmail = '$tourGuideEmail'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                $error = "You already have a Booking !! ";
            }
            if(empty($error))
            {
                $sql = "INSERT Into booking (touristEmail,touristName,country,packageName,tourGuideName,TourGuideEmail,paymentMethod,departureDate,arrivalDate,members) values ('$touristEmail','$touristName','$country','$packageName','$tourGuideName','$tourGuideEmail','$payment','$deptDate','$arriveDate','$members')";
               
                $result=mysqli_query($conn,$sql);
                
                if($result)
                {
                    $success = "Booking Successful !!";
                    header("Refresh:3; url=enterEmail.php");
                   
                }
            
            }
            $conn->close();   
    
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Booking</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/addBooking.css">
    <script src="JS/myscript.js"></script>
</head>

<body id="bookingBG" >
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
            <a class="log"href="../Home/home.html"><img id="logo" src="../pageselect/Images/logo.jpg" alt="logo"></a>
    
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
        <h2 class="BookingHeaders" style="margin-left: 0px; font-family: Arial, Helvetica, sans-serif; color:rgb(255, 255, 255); font-size: 40;">Add Booking </h2>
        <br><br>
       
   <form action="addBooking.php" method="POST" >
    
        
    <fieldset class="bookingCont">

        <br><br>
        
        
        <p style="margin-right: -10px;">Enter Tourist Email :  <input type="email" id="touristEmail" name="tmail" style=" width: 250px; " required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}"></p><br>
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
        <p style="margin-left: -90px;">Enter the Number Of Travellers : <input type="text" id="members" name="members" style="width: 250px; height: 25px;" required ></p>
            <br>  
            <br>
            <br>

        
        <center>
            
            <button id="submit" type="submit" class="btn1" name="submit">Submit</button>
            &emsp14;
            <button type="reset" class="btn1" >Reset</button>
            <br><br><br>
            
       
    
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        <br> <br>
        </div>
        <br> 
    </fieldset></center>
    </form>
    <br><br>
    <center>
    <a  href="../Booking/enterEmail.php">
        <button id="book" style="width:400px; height:50px; margin-left:25px; border-radius:10px;">
           Click Here To View Your Booked Tours !!!
        </button>
        </a>  
    <center>
        <br>
    <center>
    <a  href="../Packages/Packages.html">
    <button type="reset" class="btn1" >Packages</button>
        </a> &emsp;
        <a  href="../Serendipity/Guideavailable.php">
    <button type="reset" class="btn1" >Guides</button>
        </a>   
    <center>
<br>
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
