<?php

$server = "<SERVER>";
$username = "<USERNAME>";
$password = "<PASSWORD>";
$database = "<DATABASE";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>