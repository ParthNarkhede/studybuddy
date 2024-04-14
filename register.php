<?php
// Include database connection file
include_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // SQL injection protection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);

    // Insert user data into database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if(mysqli_query($conn, $sql)) {
        // Registration successful, redirect to login page
        header("location: login.html");
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
