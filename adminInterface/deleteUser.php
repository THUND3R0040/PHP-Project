<?php



include '../database/db_connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['userEmail'];
    $query = "delete from users where u_email = '$email'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo 'success';
    }
    else{
        echo 'error';
    }
}
else{
    echo 'error';
}

