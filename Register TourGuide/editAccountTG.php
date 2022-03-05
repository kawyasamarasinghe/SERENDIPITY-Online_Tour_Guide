<?php

include ('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $success = "";
    $error = "";

    $email= $_POST['email'];
 
    $query = "UPDATE regtourguide SET  firstName = '$_POST[firstname]', lastName = '$_POST[lastname]' , Password = '$_POST[createPassword]', country = '$_POST[countryname]', bio = '$_POST[bio]', experience = '$_POST[experience]' where email = '$_POST[email]'"; 

    $run = mysqli_query($conn,$query);

    if($run)
    {
        
        $success = "Account Update Successful";
        header("Refresh:3; url=myAccountTG.php");
    }
    else
    {
        $error = "Account Update Failed";
    }


}
    $conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Tour Guide Edit Account</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="css/editAccountTG.css">
		 <link rel="stylesheet" type="text/css" href="css/editAccountTGHead.css">
         <link rel="stylesheet" type="text/css" href="css/footer.css">
        <script src="JS/myscript.js"></script>
    </head>

    <body id="EditTGBG">
	
	    <div>
        <div class="fdiv">
    
        </div>
        <!--NAVIGATION BAR-->
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
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
        
        <div >
            
        <form action="editAccountTG.php" method="POST" >
            <center>
            <br><br>
            <br><br>
            <fieldset class="Editbox">
			<br>

            <h1>Edit Profile</h1>
            <h2>Tour Guide</h2>
			
			<br><br>
            
            <p style="margin-right: 39px;">Enter Your email : <input type="email" id=email name = "email" style=" padding-right: 100px;" required></p><br>
             <p style="margin-right: 25px;">First Name : <input type="text" id="firstName" name="firstname" style=" padding-right: 20px; width: 250px;" required></p><br>
             <p style="margin-left: 3px;">Last Name : <input type="text" id="lastName" name="lastname" style=" padding-right: 100px;" required></p><br>
            <p style="margin-right: 120px;">New Password : <input type="password" id="epassword" name="createPassword" required ></p><br>
            <p style="margin-right: 146px;">Confirm Password : <input type="password" id="repassword" name="confirmPW"  required></p><br>
            <div class="country" id="country" ></div>
            <p style="margin-right: 72px;">Country :
                <select name="countryname" style="padding-right: 75px;" required>
                    <option value="country">Choose</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="France">France</option>
                    <option value="Italy">Italy</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Egypt">Egypt</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Dubai">Dubai</option>
                </select>
            </p><br>
                
                <label style="margin-right: 298px;">Enter your Bio :</label>
                <br>
                &emsp13;
                <textarea name="bio" id="bio" placeholder="Enter Your Bio here within 500 characters" style="margin-left: 0px;"></textarea><br>
                <br>
				<p >Experience As A Tour Guide :
                <select name="experience" id="experience"  required>
                    <option value="choose">Choose</option>
                    <option value="One year">One year</option>
                    <option value="Two years">Two years</option>
                    <option value="Three years">Three years</option>
                    <option value="More Than Three Years">More than Three years</option>
                </select>
                </p>

            
            <br><br>

        
        <center>
            <button type="submit" id="submit" onmouseover="checkpasswords()" name="submit" class="EATG" >Update Profile</button>
            &emsp;
            <button type="reset" id="reset">Reset</button>
            <br><br>
            <div class="msg">
                <?php if(isset($error)){echo $error;} ?>
                <?php if(isset($success)){echo $success;} ?>
            </div>
        </center>
        </div>
        <br>
    </fieldset>
</center>
    </form>
    
        </div> <br><br><br>
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