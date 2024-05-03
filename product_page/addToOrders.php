<?php
include '../database/db_connect.php';

$date = date('Y-m-d');
$email = $_POST['userId'];
$total = $_POST['totalPrice'];
$nbItems = $_POST['nbItems'];

// Prepare the SQL statement with placeholders
$query = "INSERT INTO `orders`(`email`, `total`, `nbItems`, `orderDate`) VALUES (:email, :total, :nbItems, :orderDate)";
$stmt = $conn->prepare($query);

// Bind the parameters
$stmt->bindParam(':email', $email);
$stmt->bindParam(':total', $total);
$stmt->bindParam(':nbItems', $nbItems);
$stmt->bindParam(':orderDate', $date);

// Execute the statement
if ($stmt->execute()) {
    echo "Order added successfully";
    header("Location: product.php");
} else {
    echo "Error adding order";
    header("Location: product.php");
}
