<?php
if(isset($_POST['submit']))
{
    $error = "";
    $success = "";
    $conn = mysqli_connect("localhost","root","","onlinetourguide") or die("Database connection error");

    if(empty($_POST['name'])||empty($_POST['Feedback']))
    {
        $error = "Submission Failed !";
    }
    
        $name = $_POST['name'];
    
        $feedback = $_POST['Feedback'];

            if(empty($error))
            {
                $sql = "INSERT Into preex (name,Feedback) values ('$name','$feedback')";
               
                $result=mysqli_query($conn,$sql);
                
                if($result)
                {

                    $success = "Your message was sent Successfuly !!";
                    echo "Your message was sent Successfuly !!";
                }
            
            }
            else
            {
                echo $error;
            }
            $conn->close();   
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Previous Experiences</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.jpg">
    <link rel="stylesheet" href="../css/Previous_Experience.css">
    <link rel="stylesheet" href="../css/previousexperiencehead.css">
    <link rel="stylesheet" href="../css/Footer.css">
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
    <div class="btn ">
    <a href="../../pageselect/registerSelector.html"><button class="button1" name="btn1 "><b>Register</b></button></a>
    <a href="../../pageselect/LoginSelector.html"><button class="button1" name="btn1 "><b>Login</b></button></a>
        
        </div>
       
    </div>
    <a class="log" href="../../Home/home.html"><img id="logo" src="../Images/logo.jpg" alt="logo"></a>

    <ul class="nav-ul">
                <li><a id="nav"  href="../../Home/home.html">Home</a></li>
                <li><a id="nav" href="../../Stars/AboutUs.php">About Us</a></li>
                <li><a id="nav" href="../../Contact/php/send.php">Contact Us</a></li>
                <li><a id="nav" href="../../Packages/Packages.html">Packages</a></li>
                <li><a id="nav" href="https://edition.cnn.com/">News</a></li>
                <li><a id="nav" href="https://www.google.com/">Search</a></li>
            </ul>

    </nav>
</div>


<body>
    <div class="header">
        <h2>Previous Experience</h2><br>
    </div>
    <div class="holdingcontainer">
        <div class="internalcontainerL">
            You'llenjoythe sea washed villagesof the south with incredible food, a wildlife safari and glamping experience that will not be forgotten. Next, you'll be swept into the hill country experiencing the places that inspired the tea baron Thomas Lipton before
            spending a final night ocean side. This trip is recommended for anyone wanting a comfortable paced experience.
            <h3>[Reviewed by Zeusxy, 4/13/2021] </h3>
        </div>


        <div class="internalcontainerM">
            Serendipity team was very helpful and responds very fast. It’s very easy to book through this and had an amazing experience overall. Eric was the best guide. He was very nice and helpful and had tons of information that influenced everything we wanted
            to do for the rest of our trip. Would recommend this tour.
            <h3>[Reviewed by Christopher, 3/05/2021]</h3>
        </div>


        <div class="internalcontainerR">
            Jo was the most thoughtful and informative host. We absolutely enjoyed our tour and would definitely recommend it. All the vineyards we visited were outstanding, especially Mudbrick Vineyard with gardens and views just as beautiful as one we visited in
            the south of France years ago. The lunch included at the end was also really good.
            <h3>[Reviewed by Wendy, 1/13/2021]</h3>
        </div>

    </div>

    <div class="holdingcontainer">
        <div class="internalcontainerL">
            Jess is so informative about the island and it’s wine The scheduled stops were awesome. Jess also went the extra mile and showed us some other points of interests.Very friendly and thoughtful staff/drivers. Felt well looked after as we have got young
            kids travelling with us, the drivers gave good suggestions as guides. Children loved the trip. We enjoyed it too. Would highly recommend
            <h3>[Reviewed by Helen, 4/29/2021]</h3>
        </div>

        <div class="internalcontainerM">
            First time that we used Serendiity and we had a great time with Nabeel at the desert tour. Pick up was very well coordinated prior to the tour! It was super fun to ride the dunes and he had a lot of interesting facts about Dubai. Despite Ramadan and COVID
            19, the tour with our guide, Yasir, was really nice .
            <h3>[Reviewed by Lina, 2/13/2021]</h3>
        </div>
        <div class="internalcontainerR">
            A bit of a long comfortable charter style bus ride to the Omani coast. For me, that was normal, but for those not used to road trips, be aware of it. Beautiful mountainous scenery. Beautiful peaceful boat ride. Very interesting and lovely sea cave we
            took a small (fast) boat ride to. Snorkeling and swimming near the cliffs. Delicious lunch. Kind, attentive, and helpful staff.
            <h3>[Reviewed by Andrew, 2/29/2020]</h3>
        </div>
    </div>
    <div class="container">

        <div class="form">
            <h3 class="title">
                <b>We value your experience with us...
            </h3></b><br>

                <form action="Previous_ex.php" method="POST">

                    <div class="input-container">
                        <input type="text" name="name" class="input" required>
                        <label for=" ">Name</label>
                        <span>Name</span>
                    </div>

                    <div class="input-container textarea">
                        <textarea name="Feedback" class="input"></textarea>
                        <label for=" ">Feedback</label>
                        <span>Feedback</span>
                    </div>

                    <button class="butn" value="Submit" name="submit">Submit</button>
                    <b><!--input type="submit " value="submit " class="btn "--></b>

                </form>

        </div>

        
    </div>
    </div>
    <script src="../js/previous_Experience.js "></script>
</body>
<br><br><br><br><br>
<div id="footer1">
        <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
        <div id="footer1">
    <!--  <p><span id="supe1">SUPERNIC AUDIO</span></p> -->
    <p class="add"><span class="sp">Our Destinations</span><br/><br/><a class="foot" href="../../Countries/Sri Lanka.html">Sri Lanka</a><br/><a class="foot" href="../../Countries/Italy.html">Italy</a><br/><a class="foot" href="../../Countries/Brazil.html">Brazil</a>
        <br><a class="foot" href="../../Countries/New Zealand.html">New Zealand</a><br><a class="foot" href="../../Countries/Dubai.html">Dubai</a><br> </p>

        <p class="add"><span class="sp">Categories</span><br/><br/><a class="foot" href="https://www.internationaltraveller.com/world/worlds-absolute-must-do-festivals/">Events</a><br/><a class="foot" href="../../Gallery/galllery.html">Gallery</a><br/><a class="foot" href="../../Stars/AboutUs.php">Ratings</a><br/><a class="foot" href="../../Serendipity/Guideavailable.php">Featured</a><br/><a class="foot" href="../../Contact/php/Previous_ex.php">Feedback</a> 
    </p>
  
    <p class="add"><span class="sp">Serendipity</span><br/><br/><a class="foot" href="../../Stars/AboutUs.php">About Us</a> <br><a class="foot" href="../../Packages/Packages.html">Explore</a><br/><a class="foot" href="../../Contact/php/send.php">Contact Us</a><br/><a class="foot" href="../../Gallery/ppolicy.html">Security and Safety</a>
        <br/><a class="foot" href="../../Gallery/ppolicy.html">Privacy Policy</a></p>
    <!--  <p class="a"><span class="flo" >FOLLOW US</span> </p><br/>-->
  
  
    <div class="f-logo">
       <a href="../../Home/home.html"> <img id="f-logo" src="../../pageselect/Images/logo.jpg" alt="f_logo"></a>
    </div>
  </div>
  
    
</body>

</html>