<?php




include '../database/db_connect.php';



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $newName = $_POST['newName'];
    $price = $_POST['newPrice'];   
    $type = $_POST['newType'];

    $query = "UPDATE product
    SET p_name = COALESCE(NULLIF('$newName', ''), p_name),
        p_price = COALESCE(NULLIF('$price$', ''), p_price),
        p_type = COALESCE(NULLIF('$type', ''), p_type)
    WHERE p_name = '$name';";
    
    $result = mysqli_query($conn, $query);
    if($result){
        echo 'success';
    }
    else{
        echo 'error';
    }
    
}
    
    