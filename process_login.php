<?php
session_start(); 
include_once "connect_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "Email is required.";
        exit(); // Stop further execution
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify the password using password_verify
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: home.php"); // Redirect to the dashboard
            exit();
        } else {
            echo "Invalid password or email.";
        }
    } else {
        echo "User  not found. Please register";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}