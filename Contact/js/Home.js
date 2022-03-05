<?php

    session_start();
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "onlinetourguide";

    $conn = new mysqli($host,$dbUserName,$dbPassword,$dbName);

    $name = $_SESSION['name'];
   
    $sql = "SELECT * FROM preex WHERE name = '$name'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
    
    if($rows>0)
    {
        $array = mysqli_fetch_assoc($result);
    }

    $conn->close();


?>
<!--Header-->
<
div class = "header" >
    <
    h2 > < b > Edit Previous Experience < /b></h
2 >
    <
    /div>

<!--guides raw 1-->
<
form action = "deleteAccountTG.php"
method = "GET" >
    <
    div class = "holdingcontainer" >
    <
    div class = "internalcontainerL" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >

    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button>

<
/div>


<
div class = "internalcontainerM" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >


    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button> < /
    div >



    <
    div class = "internalcontainerR" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >

    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button> < /
    div > <
    /div>

<!--guides raw 2-->
<
div class = "holdingcontainer" >
    <
    div class = "internalcontainerL" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >

    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button> < /
    div >


    <
    div class = "internalcontainerM" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >

    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button> < /
    div >



    <
    div class = "internalcontainerR" >
    <
    p > myname @example.com < /p><br> <
br > Lorem ipsum dolor sit amet consectetur adipisicing elit.Laborum, dignissimos ipsum suscipit ex unde corrupti rerum inventore commodi eligendi nisi illum doloremque perspiciatis sapiente quas libero architecto.Facere, maxime harum ?
    <
    br > < br >


    <
    button class = "button" > Delete < /button> <
button class = "button" > Edit < /button> < /
    div > <
    /div> <
div class = "pagination" >

    <
    div class = "bar" >
    <
    a href = "#"
class = "button2 hover-black" > « < /a> <
a href = "#"
class = "black button2" > 1 < /a> <
a href = "#"
class = "button2 hover-black" > 2 < /a> <
a href = "#"
class = "button2 hover-black" > 3 < /a> <
a href = "#"
class = "button2 hover-black" > 4 < /a> <
a href = "#"
class = "button2 hover-black" > » < /a> < /
    div > <
    /div>

<
/form>