<?php
session_start();

include 'database.php'; // Include the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    // Your SQL query to check the user's credentials
    $hashed_password = md5($password); // Use a secure hashing algorithm like bcrypt in production
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to the dashboard page
        exit();
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

// Close your database connection
mysqli_close($conn);
