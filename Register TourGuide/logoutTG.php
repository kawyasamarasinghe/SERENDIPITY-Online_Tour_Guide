<?php
include ('connection.php');

session_start();
session_destroy();
header("location:../pageselect/LoginSelector.html");

$conn->close();
?>