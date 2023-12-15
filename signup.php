<?php
include 'database.php'; // Include the database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : null;

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match";
        exit();
    }

    // Hash the password
    $hashed_password = md5($password); // Use a secure hashing algorithm like bcrypt in production

    // Your SQL query to insert a new user
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // User registered successfully, redirect to the login page
        header("Location: index.php#London"); // Redirect to the login tab
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close your database connection
mysqli_close($conn);
