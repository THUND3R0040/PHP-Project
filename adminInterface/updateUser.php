<?php


include '../database/db_connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $newRole = ($_POST['newRole'] === 'admin') ? 1 : 0;
    if(trim($_POST['newEmail'])===""){
        if(trim($_POST["newName"])===""){
            $query ="update users set isAdmin = ".$newRole." where u_email = '".$_POST['email']."'";
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'success';
            }
            else{
                echo 'error';
            }
        }
        else{
            $query = "update users set isAdmin = ".$newRole.", u_name = '".$_POST['newName']."' where u_email = '".$_POST['email']."'";
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'success';
            }
            else{
                echo 'error';
            }
        }
    }
    else{
        if(trim($_POST["newName"])===""){
            $query = "update users set isAdmin = ".$newRole.", u_email = '".$_POST['newEmail']."' where u_email = '".$_POST['email']."'";
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'success';
            }
            else{
                echo 'error';
            }
        }
        else{
            $query = "update users set isAdmin = ".$newRole.", u_name = '".$_POST['newName']."', u_email = '".$_POST['newEmail']."' where u_email = '".$_POST['email']."'";
            $result = mysqli_query($conn, $query);
            if($result){
                echo 'success';
            }
            else{
                echo 'error';
            }
        }
    }

}
else{
    echo 'error';
}
    
    


