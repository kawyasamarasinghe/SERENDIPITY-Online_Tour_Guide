<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="stylenew.css">
        
        <link rel="stylesheet" href="header(css).css">
        <link rel="stylesheet" href="footer(css).css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous"><!--Bootstrap css file to style the page-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"><!--Rateyo star rating plugin from jquery css file-->


    </head>
    <body>
        <!--header-->
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
<!--header-->


        <div class="about" style="background-image: url('b.jpg') ;background-size:cover;">
        <br><br>
            <h1>About us</h1>
                    <br><br>

            <div class="table1">
                <table>
                    <tr>
                        <td>
                            <div class="para1">
                            <h3>Who we are</h3>
                            <p style="text-align: justify;">Serendipity is an online platform that connects travellers with tourism service providers. Guides and tourists register their profiles, providing necessary information about their tours, services and previous experiences.Travellers who visit Serendipity can select the guides and the tours, to find the one most suitable to their requirements.
                                </p>
                       
                            </div>
                        </td>
                        
                            <td rowspan="2" style="background-image: url('pp back3.jpg.jpg'); height:50% ;width: 45% ; background-size:cover ">
                                <div class="para2"><br>
                                    <h3>Why Choose Us</h3>
                                    <p style="text-align: justify;">Travel can transform economies which is why we aim to empower local people by offering them a fair income plus training and development programs to help take their initiatives to a higher level.We believe in the transformational power of travel. Immersing yourself in local experiences promotes cross-cultural understanding and teaches travelers and hosts new global perspectives.We strive to bridge the gap between cultures by bringing people together through immersive off-the-beaten-path travel experiences that create meaningful connections with local people.Our story is possible because of travelers and changemakers like yourself. So join us wherever you are in the world in empowering local communities to write their own stories and envision a future where travel benefits everyone and fuels social and economic development.</p>
                                    <p>Across Africa and Asia, we're partnering with some of the most warm-hearted local people and communities who are eager to host you on your next travel adventure.</p>
        
                                 </div>  
                            </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <div class="para3">
                                <h3>Our Mission</h3>
                                <p style="text-align: justify;">“Serendipity idea was born out of our passion for other cultures and the desire to make a positive contribution to this world. As poverty alleviation is one of the most pressing global challenges people face, we realized that tourism could become a significant source of income for local communities and believed that connecting locals in developing countries with travelers directly via our platform could have a transformational power on local livelihoods.

                                    So in 2021, we invested all of our efforts into building Serendipity platform and bringing this concept to life. Now, across our network, local people are receiving 100% of the money they ask for the experiences they offer and are empowered to earn a fair income and benefit directly from tourism in their country.”</p>
    
                           
                            </div>
                            
                        </td>

                    </tr>
                </table>
                <br><br>
            </div>
            <div class="table2">
                <table>
                    <tr>
                        <td>
                           
                            <div class="container">
                                <div class="row" >

                            <form method="post" name="form1">

                                <div class="rating" style="border-radius: 20px;">
                                    <h3 style="text-align: center; padding-top:8px; margin-left:35px;">Rating System</h3>
                                </div>
<br>
                                <div>
                                    <label>Name</label>
                                    <input type="text" name="name">
                                </div>
                                <br>
                                    <div class="rateyo" id= "rating"
                                    data-rateyo-rating="4"
                                    data-rateyo-num-stars="5"
                                    data-rateyo-score="3">
                                    </div>

                                <span class="result">0</span>
                                <input type="hidden" name="rating">

                                </div>
<br>
                                <buttons style="margin-left: 40px;">
                                <input type="submit" name="add" value="Add" style="padding: 2px 6px ; border-radius:15px" onclick="return validation()"> 
                                <input type="submit" name="delete" value="Delete" style="padding: 2px 6px ; border-radius:15px" onclick="return del()">
                                <input type="submit" name="update" value="Update" style="padding: 2px 6px ; border-radius:15px">
                                <input type="submit" name="total" value="View" style="padding: 2px 6px ; border-radius:15px">
                                </buttons>

                            </form>
                            <script>
                                function validations()
                                {
                                    var name = document.form1.name.value;
                                    
                                    if(name == "")
                                    {
                                        alert("Enter your name!!");
                                    }
                                    
                                }
                                function del()
                                {
                                    var name = document.form1.name.value;
                                    
                                    if(name == "")
                                    {
                                        alert("Enter your name!!");
                                    }
                                    
                                }
                            </script>
                            </div>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--Rateyo star rating plugin from jquery (js file)-->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script><!--Rateyo star rating plugin from jquery (js file)-->

                            <script>


                                $(function () {
                                    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                                        var rating = data.rating;
                                        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                                        $(this).parent().find('.result').text('rating :'+ rating);
                                        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                                    });
                                });

                            </script> <br>
                        </td>   
                        
                    </tr>

                </table>
                <br>
                <div class="table3">
                <table border="0">
                    <tr>
                        <td>
                        <?php
                            require 'starconnection.php';
                            if(isset($_POST['add']))
                            {
                            
                                $name = $_POST['name'];
                                $rating = $_POST['rating'];

                                $query = "INSERT INTO ratee (name,rate) VALUES ('$name','$rating')";
                                $run = mysqli_query($conn,$query) or die;

                                if($run){
                                    echo "New rate added";
                                }
                                else
                                {
                                    echo "Not submitted";
                                }
                            }
                            if(isset($_POST['update']))
                            {
                                $name = $_POST['name'];
                                $rating = $_POST['rating'];

                                $query = "update ratee set rate=$rating where name='$name'";
                            
                                $run = mysqli_query($conn,$query) or die;

                                if($run){
                                    echo "row updates";
                                }
                                else
                                {
                                    echo "Not updated";
                                }
                            }
                            if(isset($_POST['delete']))
                            {
                                $name = $_POST['name'];
                                
                                $query = "delete from ratee where name = '$name'";
                                $run = mysqli_query($conn,$query) or die;

                                if($run){
                                    echo "row deleted";
                                }
                                else
                                {
                                    echo "Not deleted";
                                }
                            }
                            if(isset($_POST['total']))
                            {
                                $sql = "SELECT * FROM ratee";

                                $mysqliStatus = $conn->query($sql);

                                $rows_count_value = mysqli_num_rows($mysqliStatus);

                                echo "Total number of ratings: $rows_count_value";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
           <br>
            <div class="Team"><br>
                <h2>Our team</h2>
                <p>We have a great team with the best experiences.The amount of effort that the team put into the job to complete it was tremendous.Serendipity has the most courageous and united team.We all do our best for our customers as a team. This definitely has set up higher standards in the organization. </p>
            </div>
        </div>
                                   <!--footer-->
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