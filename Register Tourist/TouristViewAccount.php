<?php

    session_start();
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "onlinetourguide";

    $conn = new mysqli($host,$dbUserName,$dbPassword,$dbName);

    $email = $_SESSION['email'];
   
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
    
    if($rows>0)
    {
        $array = mysqli_fetch_assoc($result);
    }
    
    $conn -> close();


?>

<!DOCTYPE html>
<html>

<head>
    <title>view</title>
    <link rel="stylesheet" href="./view.css">
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
        
    
       <br><br>
    
       
        

   <div>
   <form method="POST" action="">
        
    <div class="view">
        <div class="container"> 
        <center>
            <h1>My Profile</h1>
            <h2>Tourist</h2>
       
        <br><br>
        
            <p>First Name : <input type="text" value="<?php echo $array['fname'] ?>" readonly></p>
            <br>
            <p>Last Name : <input type="text" value="<?php echo $array['lname'] ?>" readonly></p>
            <br>
            <p>Date of Birth : <input type="text" value="<?php echo $array['dob'] ?>" readonly></p>
            <br>
            <p>Email : <input type="email" value="<?php echo $array['email'] ?>" readonly></p>
            <br>
            <p>Gender :<input type="text" value="<?php echo $array['gender'] ?>" readonly></p>
            <br>
            <label>Bio : <input type="text" value="<?php echo $array['bio'] ?>" readonly></label>
            <br>
            <br>
            <br><br><br>
            
            

        <button name="edit" value="edit" name="btnED" class="editID" style="height:30px; width:125px; border-radius:10px; font-size:18px;"><a href="EditAccountTO.php">Edit Profile</a></button> &emsp;
        <button name="delete" value="delete" name="btnDL" class="delID" style="height:30px; width:125px; border-radius:10px; font-size:18px;"> <a href="deleteAccountTO.php"> Delete Profile </a></button>
    </center>
    </div>
  
</div>
   </form>
   </div>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br> <br>
   <br>
   <br>
   <br>

<div id="footer1">
    <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
    <p class="add"><span class="sp">Our Destinations</span><br/><br/><a class="foot" href="#">Sri Lanka</a><br/><a class="foot" href="#">Italy</a><br/><a class="foot" href="#">Brazil</a>
        <br><a class="foot" href="#">New Zealand</a><br><a class="foot" href="#">Dubai</a><br> </p>

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
   


  
   
    </body>
</html>
</body>
</html>