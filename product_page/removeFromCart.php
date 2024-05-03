
<?php

session_start();

require('../database/db_connect.php');




if(!isset($_SESSION['email'])){
    echo"u need to login";
    exit();
}

// Check if the user is logged in
elseif (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // Check if the request is a POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the product ID from the AJAX request
        $productName = ($_POST['productName']);

        $query = "delete from cart where u_email='$email' and p_name='$productName'";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();

        if ($result) {
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







