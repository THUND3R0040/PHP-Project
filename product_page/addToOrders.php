<?php

include '../database/db_connect.php';


$date = date('Y-m-d');
$email = $_POST['userId'];
$total = $_POST['totalPrice'];
$nbItems = $_POST['nbItems'];


$query = "INSERT INTO `orders`( `email`, `total`, `nbItems`, `orderDate`) VALUES ('$email','$total','$nbItems','$date')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Order added successfully";
    header("Location: product.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    header("Location: product.php");
}