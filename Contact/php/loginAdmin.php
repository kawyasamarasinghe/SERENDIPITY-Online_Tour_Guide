<?php
    if(isset($_POST['submit']))
    {
        session_start();	

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

                if($email == "admin123@serendipity.com" && $password == "1212")
                    {   
                        $_SESSION['email']=$email;
                        $success = "Login Successful !!! <br> Welcome Admin !!";
                       header("location:../Admin_ControlPanel.html");
                    }
                 else
                    {
	                   $error="Username or Password Wrong !!! <br> Please Check Details !!";
                    }
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>SERENDIPITY</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="../css/stylecheet.css">

     
</head>

<body id="loginbodyAdmin" style="background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
    background-position: cover;
    backface-visibility: hidden;" >
    

   <div class="contentAdmin" id="Admincont">
       <center>
    <fieldset id="loginboxAdmin" class="loginboxAdmin" style="width: 500px;
    margin-top: 200px;
    background-color: gainsboro;
    border-radius: 50px;
    box-shadow: 8px 8px 50px;
    background:rgba(204, 203, 203, 0.8);
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
      <center> <h1 class="logIdAdmin">Login</h1></center> 
        <br><br>
        <center>
        <form action="loginAdmin.php" method="POST" >
            <p id="emailAdmin" class="loginAdmin" style="margin-left: 15px;">Email&emsp; :- <input class="input" type="email" name="email" placeholder="Enter Email" ></p>
            <p class="login">Password :- <input class="input" type="password" name="password" placeholder="Password" ></p>
            
            <br>
            <br>
            <center>
            <button class="entry" type="submit" name="submit">Log In</button>
            <button class="entry" type="reset" name="reset">Reset</button><br><br>
            </center>
        
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
    
    </fieldset>
            </center>
   </div>
   <br>
   <br>

</body>
</html>     
     