<?php


if(isset($_POST['submit']))
{
    $error = "";
    $success = "";

    include('connection.php');


    if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['dob'])||empty($_POST['email'])||empty($_POST['passportno'])||empty($_POST['createPW'])||empty($_POST['countryname'])||empty($_POST['gender'])||empty($_POST['bio'])||empty($_POST['experience']))
    {
        $error = "Please enter all the details first !";
    }
    
        $firstname = mysqli_escape_string($conn,filter_var(strip_tags($_POST['fname']),FILTER_SANITIZE_STRIPPED));
        
        $lastname = mysqli_escape_string($conn,filter_var(strip_tags($_POST['lname']),FILTER_SANITIZE_STRIPPED));
        
        $dob = mysqli_escape_string($conn,filter_var(strip_tags($_POST['dob']),FILTER_SANITIZE_STRIPPED));
        
        $email = mysqli_escape_string($conn,filter_var(strip_tags($_POST['email']),FILTER_VALIDATE_EMAIL));
        
        $passportNo = mysqli_escape_string($conn,filter_var(strip_tags($_POST['passportno']),FILTER_SANITIZE_STRIPPED));

        $password = mysqli_escape_string($conn,filter_var(strip_tags ($_POST['createPW']),FILTER_SANITIZE_STRIPPED));
        
        $country = mysqli_escape_string($conn,filter_var(strip_tags($_POST['countryname']),FILTER_SANITIZE_STRIPPED));
        
        $gender = mysqli_escape_string($conn,filter_var(strip_tags($_POST['gender']),FILTER_SANITIZE_STRIPPED));
        
        $bio = mysqli_escape_string($conn,filter_var(strip_tags($_POST['bio']),FILTER_SANITIZE_STRIPPED));
        
        $experience = mysqli_escape_string($conn,filter_var(strip_tags($_POST['experience']),FILTER_SANITIZE_STRIPPED));
    
        
       
   
            $sql = "SELECT * FROM regtourguide WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                $error = "You are already a member of SERENDIPITY !<br> Please Login ";
            }
            if(empty($error))
            {
                $sql = "INSERT Into regtourguide (firstName,lastName,dob,email,passportno,Password,country,gender,bio,experience) values ('$firstname','$lastname','$dob','$email','$passportNo','$password','$country','$gender','$bio','$experience')";
               
                $result=mysqli_query($conn,$sql);
                
                if($result)
                {
                    $success = "Hi !!! Welcome To SERENDIPITY <br> Registration Successful !!";
                    header("Refresh:3; url=loginTG.php");
                }
            
            }
            $conn->close();   
    
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Tour Guide Create Account</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/createaccountTG.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/createAccountTGHead.css">
    <script src="JS/myscript.js"></script>
</head>

<body id="CAbg" >

   
<div class="fdiv">
    
    </div>
    <!--NAVIGATION BAR-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <div class="btn ">
                <a href="../pageselect/LoginSelector.html"><button class="button1" name="btn1 "><b>Login</b></button></a>
            
            </div>
        <a class="log" href="../Home/home.html"><img id="logo" src="Images/logo.jpg" alt="logo"></a>

        <<ul class="nav-ul">
            <li><a id="nav"  href="../Home/home.html">Home</a></li>
            <li><a id="nav" href="../Stars/AboutUs.php">About Us</a></li>
            <li><a id="nav" href="../Contact/php/send.php">Contact Us</a></li>
            <li><a id="nav" href="../Packages/Packages.html">Packages</a></li>
            <li><a id="nav" href="https://edition.cnn.com/">News</a></li>
            <li><a id="nav" href="https://www.google.com/">Search</a></li>
        </ul>
    </nav>
</div>
   <div class="content" id="content" >
    
        <h2 class="CAheaders">Create Account </h2> <h3 class="CAheaders">As a Tour Guide</h3>
       


   <form action="Create account TourGuide.php" method="POST" >
    <center>
        
    <fieldset class="CAcont">

        <br>
        
        
        <p>First Name :  <input type="text" id="firstName" name="fname" style=" padding-right: 75px;" required></p><br>
        <p style="margin-left: 1px;">Last Name : <input type="text" id="lastName" name="lname" style="padding-right: 75px; margin-left:1px;" required></p><br>
        <p style="margin-left: -10px;">Date of Birth : <input type="date" id="dob" name="dob" style=" padding-inline:50px;" required></p><br>
        <p style="margin-left: 20px;">Email  &emsp; : <input type="email" id="guideEmail" name="email" style="width: 250px; height: 25px;" required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}"></p><br>
        <p style="margin-right: 43px;">Passport Number : <input type="text" id="passportNo" name="passportno" style="padding-right: 75px;" required></p><br>
        <p style="margin-right: 40px;">Create Password : <input type="password" id="epassword" name="createPW" style="padding-right: 75px;" required ></p><br>
        <p style="margin-right: 48px;">Confirm Password : <input type="password" id="repassword" name="confirmPW" style="padding-right: 75px;" required></p><br>
        <div class="country" id="country" ></div>
            <p style="margin-right: 45px;">Country :
            <select name="countryname" style="padding-right: 75px;" required>
                <option value="country">Choose</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Italy">Italy</option>
                <option value="Brazil">Brazil</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Dubai">Dubai</option>
            </select>
            </p><br>
            <p style="margin-right: 125px;">Select Gender : &emsp;
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </p><br>
            <p>
            <label style="margin-right: 272px;">Enter your Bio :</label>
            <br>
            &emsp13;
            <textarea name="bio" id="bio" placeholder="Enter Your Bio here within 500 characters" style="margin-left: 0px; font-family:Verdana, Geneva, Tahoma, sans-serif;"></textarea>
            </p><br>
            <p >Experience As A Tour Guide :
            <select name="experience" id="experience" required>
                <option value="choose">Choose</option>
                <option value="One year">One year</option>
                <option value="Two years">Two years</option>
                <option value="Three years">Three years</option>
                <option value="More Than Three Years">More than Three years</option>
            </select>
            </p>
            <br>

            
            <input type="checkbox" id="privacy" name="privacy" onclick="enablebutton()" required>
            <label>I agree SERENDIPITY's terms of services and privacy policy</label><br><br>

        
        <center>
            &emsp13;
            <button id="submit" type="submit" class="CAbtn" onmouseover="checkpasswords()" name="submit">Submit</button>
            &emsp14;
            <button type="reset" class="CAbtn" >Reset</button>
            <br><br>
            <?php if(isset($error)){echo $error;} ?>
            <?php if(isset($success)){echo $success;} ?>
        </center>
        </div>
    </fieldset></center>
    </form>
    <br>
    <br><br><br>
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
