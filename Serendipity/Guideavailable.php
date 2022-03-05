<!DOCTYPE html>
<html>
    <head>
        <title>Guides available</title>
        <link rel="stylesheet" type="text/css" href="css/Guidesavailable.css">
        <link rel="stylesheet" type="text/css" href="css/guideavailablehead.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
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
    <a href="../pageselect/registerSelector.html"><button class="button1" name="btn1 "><b>Register</b></button></a>
        <a href="../pageselect/LoginSelector.html"><button class="button1" name="btn1 "><b>Login</b></button></a>
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
 <body>
 <a  href="../Packages/Packages.html"> <button id="b" style="width:150px; height:30px; margin-left:25px; border-radius:10px;">Travel Packages</button></a>
        <br>
        <br>
     <!--Header-->
        <div class="header">
            <h2><b>Guides Available</b></h2>
        </div>

    <!--guides raw 1-->
    <center>
    <table border="5" width="relative" style=" font-family:Arial, Helvetica, sans-serif; background-color:cornsilk; border-style:hidden; border-collapse:collapse; font-weight:bold; border-radius:15px; ">
        <tr>
            <th style="width:50px; height:30px;">ID</th>
            <th style="width:100px;height:30px;">First Name</th>
            <th style="width:50px;height:30px;">Last Name</th>
            <th style="width:50px;height:30px;">Email</th>
            <th style="width:50px;height:30px;">Country</th>
            <th style="width:50px;height:30px;">Gender</th>
            <th style="width:600px;height:30px;">Bio</th>
            <th style="width:50px;height:30px;">Experience</th>
        
            
    </tr>
    <br>
            <?php
                $conn = mysqli_connect("localhost","root","","onlinetourguide");
                if($conn-> connect_error){
                    die("Connection Failed:". $conn-> connect_error);
                }
                $sql = "SELECT id, firstName, lastName, dob, email, passportno, country, gender, bio, experience  from regtourguide";
                $result = $conn-> query($sql);
    
                if($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "
                        <tr>
                        <td> <br><center>". $row["id"]. "</center><br></td>
                        <td><center>". $row["firstName"]. "</center></td>
                        <td><center>". $row["lastName"]. "</center></td>
                        <td><center>". $row["email"]. "</center></td>          
                        <td><center>". $row["country"]. "</center></td>
                        <td><center>". $row["gender"]. "</center></td>
                        <td><center>". $row["bio"]. "</center></td>
                        <td><center>". $row["experience"]. "</center></td>
                        </tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conn-> close();
            ?>
        </table>
        <br><br><br><br>
        <a  href="../Booking/addBooking.php">
        <button id="book" style="width:400px; height:50px; margin-left:25px; border-radius:10px;">
           Click Here To Make Your Booking !!!
        </button>
        </a> 
    <br><br><br>
      </center>
        <br><br><br><br>
       

 </body>
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


</html>