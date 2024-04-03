 

<?php

// purpose: modify user data

session_start();

include ("../database/db_connect.php");


$u_email = $_SESSION["email"];
$u_name = $_SESSION["name"];

if(isset($_POST["modify"])){
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $newPassword = $_POST["new-password"];
    if($password != ""){
        $sql = "SELECT * FROM users WHERE u_email = '$u_email';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $Row = mysqli_fetch_assoc($result);
            if(password_verify($password, $Row['u_password'])){
                if($name != ""){
                    $sql = "UPDATE users SET u_name = '$name' WHERE u_email = '$u_email';";
                    mysqli_query($conn, $sql);
                    $_SESSION["name"] = $name;
                }
                elseif($email != ""){
                    $sql = "UPDATE users SET u_email = '$email' WHERE u_email = '$u_email';";
                    mysqli_query($conn, $sql);
                    $_SESSION["email"] = $email;
                }
                elseif($newPassword != ""){
                    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET u_password = '$newPassword' WHERE u_email = '$u_email';";
                    mysqli_query($conn, $sql);
                }
                $_SESSION["error"] = "0";
                header("Location: ./userAccount.php");
            }
            else{
                $_SESSION["error"] = "1";
                header("Location: ./userAccount.php");
            }
            
        }  
    }
}



?>