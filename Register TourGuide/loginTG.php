<?php
    if(isset($_POST['submit']))
    {
        session_start();	
        include('connection.php');
        


        $success="";
        $error="";

        if(empty($_POST['email']) || empty($_POST['password']))
            {
	            $error="Please enter all the details !!";
            }
        
        else
        {
                $email=$_POST['email'];
                $password=$_POST['password'];	

                $sql="SELECT * FROM regtourguide WHERE email='$email' AND Password='$password'";

                $result=mysqli_query($conn,$sql) or die("Your query is not right");

                if(!$row = mysqli_fetch_assoc($result))
                    { 
                        $error = "You have entered wrong Email or password";
                    }
                 else
                    {
	                   
                        $_SESSION['email']=$email;
			            
                        if(isset($_POST['rememberme']))
                         {
                            header("Refresh:2; url=myAccountTG.php");
                             $success="Login Successful !!! <br> Welcome !!";
                             setcookie("email",$_POST['email'],time()+(30*60*60*24));
                             setcookie("password",$_POST['password'],time()+(30*60*60*24));
                         }
                     else
                         {
                            header("Refresh:2; url=myAccountTG.php");
                             $success="Login Successful !!! <br> Welcome !!";
                             setcookie("email","");
                             setcookie("password","");
                         }
                    }
        }
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Tour Guide</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/loginTG.css">
    <script src="JS/myscript.js"></script>
     
</head>

<body id="loginbody" >
    

   <div class="content" id="content">
       <center>
    <fieldset id="loginbox" class="loginbox">
      <center> <h1 class="logId">Login</h1></center> 
        <br><br>
        <center>
        <form action="loginTG.php" method="POST" >
            <p id="emailp" class="login">Email&emsp; :- <input class="input" type="email" name="email" placeholder="Enter Email" ></p>
            <p class="login">Password :- <input class="input" type="password" name="password" placeholder="Password" ></p>
            
            <div id = "check"><input class="input" type="checkbox" name="rememberme" >
            <span class="login" >Remember me</span><br>
            
            </div><br>
            <br><br>
            <button class="entry" type="submit" name="submit">Log In</button>
            <button class="entry" type="reset" name="reset">Reset</button><br><br>
            <p class="login">OR</p>
             &emsp13;
            <button class="entry"><a id="CAL" href="Create account TourGuide.php">Create New Account </a></button> 
        <br><br>
            <div id="result">
                <br>
                &emsp13;
            <?php
                if(isset($error))
                {
                    echo $error;
                }
                if(isset($success))
                {
                    echo $success;
                }


            ?>
            </div>
            <br>
        </form>
        </center>
    </fieldset>
            </center>
   </div>
   <br><br><br>
   <br><br>

</body>
</html>     
     