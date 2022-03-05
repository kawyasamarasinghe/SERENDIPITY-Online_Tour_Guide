<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Tourist Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/background.css">    
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
        <button class="button1" name="btn1 "><a class="logout" href="../Register TourGuide/logoutTG.php" id="button1" ><b>Log Out</b></a></button>
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
<body style=" background-image:url(../Countries/Images/dubai3.jpg); font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<!--Header-->
<div class="header">
    <br><br>
       <h2> &emsp;<b style="color: goldenrod;">View Tourist Profiles</b></h2>
    </div>
    <br><br>
    <center>
    <table border="5" width="95%" style=" font-family:Arial, Helvetica, sans-serif; background-color:cornsilk; border-style:hidden; border-collapse:collapse; font-weight:bold; border-radius:15px; ">
    <tr>
        <th  style="width:50px; height:30px;">ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Email</th>
		<th>Gender</th>
        <th>Bio</th>
		<th>Delete</th>
        
</tr>
<br>
        <?php
            $conn = mysqli_connect("localhost","root","","onlinetourguide");
            if($conn-> connect_error){
                die("Connection Failed:". $conn-> connect_error);
            }
            $sql = "SELECT id, fname, lname, dob, email, gender, bio from register";
            $result = $conn-> query($sql);

            if($result -> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "
                    <tr>
                    <td><br><center>". $row["id"]. "</center><br></td>
					<td><br><center>". $row["fname"]. "</center><br></td>
                    <td><br><center>". $row["lname"]. "</center><br></td>
					<td><br><center>". $row["dob"]. "</center><br></td>
					<td><br><center>". $row["email"]. "</center><br></td>
                    <td><br><center>". $row["gender"]. "</center><br></td>
					<td><br><center>". $row["bio"]. "</center><br></td>
					


                    <td><a href ='Delete_tourist.php?id = $row[id]'><input type ='submit' value ='Delete' name='send'></a></td>
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
    </center>

<br><br><br><br><br><br><br><br>
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