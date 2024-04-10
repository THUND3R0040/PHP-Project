<?php

session_start();

require('../database/db_connect.php');


$date = date('Y-m-d');




if(!isset($_SESSION['email'])){
    echo"u need to login";
    $_SESSION["loginNeeded"] = 1;
    exit();
}

// Check if the user is logged in
elseif (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // Check if the request is a POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the product ID from the AJAX request
        $productId = ($_POST['product_id']);

        $query = "insert into cart(u_email,p_name,addDate) values ('$email','$productId','$date')";
        $result = mysqli_query($conn, $query);

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


