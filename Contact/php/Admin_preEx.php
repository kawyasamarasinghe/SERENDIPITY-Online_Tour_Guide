<!DOCTYPE html>
<html lang="en">

<head>
    <title>Previous Experience</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.jpg">
    <link rel="stylesheet" href="../css/Admin_previous_ex.css">
    <link rel="stylesheet" href="../css/headeadminpre.css">
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
        <button class="button1" name="btn1 "><a class="logout" href="../../Register TourGuide/logoutTG.php" id="button1" ><b >Log Out</b></a></button>
           
        </div>
        <a class="log"href="../../Home/home.html"><img id="logo" src="../Images/logo.jpg" alt="logo"></a>
    
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
<!--Header-->
<div class="header">
    <br><br>
        <h2><b>Edit Previous Experience</b></h2>
    </div>
    <br><br>
    <center>
<table border="2" width="75%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Feedback</th>
        <th>Update</th>
        <th>Delete</th>
</tr>
<br>
        <?php
            $conn = mysqli_connect("localhost","root","","onlinetourguide");
            if($conn-> connect_error){
                die("Connection Failed:". $conn-> connect_error);
            }
            $sql = "SELECT id, name, feedback from preex";
            $result = $conn-> query($sql);

            if($result -> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "
                    <tr>
                    <td>". $row["id"]. "</td>
                    <td>". $row["name"]. "</td>
                    <td>". $row["feedback"]. "</td>

                    <td><a href ='Edit_Admin_PreEx.php?id = $row[id] & name = $row[name] &  = $row[feedback]'><input type ='submit' value ='Update' name='submit'></a></td>
                    <td><a href ='Delete_Admin_PreEx.php?id = $row[id]'><input type ='submit' value ='Delete' name='send'></a></td>
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
</body>
<br><br><br><br>
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