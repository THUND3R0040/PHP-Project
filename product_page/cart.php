<?php
session_start();
require('../database/db_connect.php');

$date = date('Y-m-d');

if (!isset($_SESSION['email'])) {
    echo "You need to log in";
    $_SESSION["loginNeeded"] = 1;
    exit();
} elseif (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productId = ($_POST['product_id']);

        // Use prepared statements to insert data
        $stmt = $conn->prepare("INSERT INTO cart(u_email, p_name, addDate) VALUES (:email, :productId, :date)");
        // Bind values to the named placeholders
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':productId', $productId);
        $stmt->bindParam(':date', $date);
        echo $productId;
        echo $email;
        if ($stmt->execute()) {
            // Success
            http_response_code(200); // OK
        } else {
            // Error
            http_response_code(500); // Internal Server Error
        }
    } else {
        http_response_code(405); // Method Not Allowed
        echo 'Invalid request method';
    }
}
?>
