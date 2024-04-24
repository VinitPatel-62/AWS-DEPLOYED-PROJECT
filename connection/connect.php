<?php

//main connection file for both admin & front end
$servername = "foodpicky.cv62qs06gvie.ap-south-1.rds.amazonaws.com"; //server
$username = "admin"; //username
$password = "vinitpatel6262"; //password
$dbname = "foodpicky";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>