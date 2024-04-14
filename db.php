<?php
$servername = "localhost";
$username = "root";
$password = "Vedu@321";
$dbname = "new";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
