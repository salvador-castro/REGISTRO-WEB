<?php
$servername = "localhost";
$database = "registro";
$username = "root";
$password = "root";
// Create connection
$conex = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conex);