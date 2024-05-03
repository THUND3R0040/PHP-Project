<?php
require('../database/db_connect.php');

$email = $_GET['email'];
$code = $_GET['code'];

try {
    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE users SET isActive = 1 WHERE u_email = :email");
    
    // Bind parameters
    $stmt->bindParam(':email', $email);
    
    // Execute the statement
    $stmt->execute();
    
    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        echo "
        <div>
            <h1>Account Activated</h1>
            <p>Your account has been activated. You can now login.</p>
            <a href='../login/login.php'>Login</a>
        </div>";
    } else {
        echo "Something went wrong. Please try again.";
    }
} catch(PDOException $e) {
    // Handle database connection errors
    header("Location: ../database/db-failed.php");
    die();
}
?>
