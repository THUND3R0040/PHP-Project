<?php



include '../database/db_connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $query = "update  comments set isAnswered = 1 where c_id = '$id'";
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