<?php

require_once('connection.php');
if(isset($_POST['btnSub']))
{
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $dob = mysqli_real_escape_string($con,$_POST['dob']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $createPW = mysqli_real_escape_string($con,$_POST['createPW']);
    $confirmPW = mysqli_real_escape_string($con,$_POST['confirmPW']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $bio = mysqli_real_escape_string($con,$_POST['bio']);

   // echo $fname,$lname,$dob,$email,$createPW,$confirmPW,$gender,$bio;



if($createPW!=$confirmPW)
{
    echo 'password not matched';
}
else
{

    $pass =($createPW);
    $sql="INSERT INTO  register (fname,lname,dob,email,createPW,gender,bio) values('$fname',' $lname','$dob','$email','$pass','$gender','$bio')";
    $result = mysqli_query($con,$sql);
    
    if($result){
        echo 'your record has been saved in the database';
        header("location:login.php");
    }
    else{
        echo 'please check your qurey';
                }
    }

}

?>
<html>

<head>
    <title>Create Account Tourist</title>
    
    <link rel="stylesheet" href="./crate.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/createaccountheader.css">
    
</head>

<body>
    <div>
    <header>
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

        <ul class="nav-ul" style="margin-right:12%;">
            <li><a id="nav"  href="../Home/home.html">Home</a></li>
            <li><a id="nav" href="../Stars/AboutUs.php">About Us</a></li>
            <li><a id="nav" href="../Contact/php/send.php">Contact Us</a></li>
            <li><a id="nav" href="../Packages/Packages.html">Packages</a></li>
            <li><a id="nav" href="https://edition.cnn.com/">News</a></li>
            <li><a id="nav" href="https://www.google.com/">Search</a></li>
        </ul>
    </nav>
</div>

   
    </header>
   <br><br>
   <center>
     
    <div class="create">
        <div class="container"> 
    <div>
        Create Account 
        <br>        
        As a Tourist
    </div>
    <br>
     

   </div>

   <form action="CreateAccountTourist.php" method="POST" >
    
    
        <p>First Name : <input type="text"  name="fname"  required></p><br>
        <p>Last Name : <input type="text"  name="lname"></p><br>
        <p>Date of Birth :<input type="date"  name="dob" required></p><br>
        <p>Email : <input type="email"  name="email" required placeholder="example@anywhere.com" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}"></p><br>
        <p>Create Password : <input type="password" name="createPW" required ></p><br>
        <p>Confirm Password : <input type="password" name="confirmPW"  required></p><br>
       
            <p>Select Gender :
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </p><br>
            <label>Enter your Bio :</label>
            <br>
            <textarea name="bio" id="bio" placeholder="Enter Your Bio here"></textarea>
            <br><br>
            <input type="checkbox" id="privacy" name="privacy" onclick="enablebutton()" required>
            <label>I agree SERENDIPITY's terms of services and privacy policy</label><br><br>

        
        
            <input type="submit" value="submit" name="btnSub" class="subID"><a href="../Register Tourist/TouristViewAccount.php"></a>

            <input type="reset" value="reset" name="btnRes" class="resetID">  <br><br> 
           </center>
     </div>
    </form>

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
    

