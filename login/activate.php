<?php

require ('../database/db_connect.php');

$email = $_GET['email'];
$code = $_GET['code'];


$sql = "UPDATE users SET isActive = 1 WHERE u_email = '$email';";
$result = mysqli_query($conn, $sql);

if($result){
    echo "
    <div>
        <h1>Account Activated</h1>
        <p>Your account has been activated. You can now login.</p>
        <a href='../login/login.php'>Login</a>
    </div>";
}else{
    echo "Something went wrong. Please try again.";
}

