<?php

require_once('connection.php');

if(isset($_POST['btn2']))
session_start();
{
if(!empty($_POST['email'])||!empty ($_POST ['psw'])){
    $email= $_POST ['email'];
    $password=  $_POST ['psw'];

    
    
    $sql="SELECT * FROM register WHERE email='$email'AND createPW='$password'";
/*$result=mysql_query($sql);*/

    $result = mysqli_query($con,$sql);
    if(!$row = mysqli_fetch_assoc($result))
    {
        echo "you have entered incorrect password" ;
        exit();
    }
    else{
        $_SESSION ['email']= $email;
        echo "you have succesfully logged in" ;
        header("location:TouristViewAccount.php");
        exit(); 
    }
}
}
?>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="../Register Tourist/login.css">
    
</head>
<body>
    <div class="loginInt">
        <div class="container">
            
            <br>
            <br>
         <form  method="POST" action="#">
             <h1 class="logINO">LOG IN</h1>
            
    
        
       
    </div>
    <p>Email :--- <input type="email"  name="email" required placeholder="Enter Email" pattern="[a-z0-9._%+_-]+@[a-z0-9._]+\.[a-z]{2,3}"></p>

       
            <b>Password </b>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>
            <div class="staylog">
            <input type="checkbox"    name="remember"> stay log in 
        </div>
            <br>         
           
            <a href="../Register Tourist/CreateAccountTourist.php"> <h3 class="dont">Create an Account</h3></a>
            <button type="submit" name="btn2" class="logID">Login</button>
            <br>
            <br>
            <br>
            
        </form>
    </div>
       



        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <br>
       
        <H5>follow us</H5>
        <h6>all copyright issued</h6>
        <h6></h6>

    </center><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    
</body>


</html>
