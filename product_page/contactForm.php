<?php


session_start();
require_once '../database/db_connect.php';
require '../vendor/autoload.php';
include "../const.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])) {
    if(isset($_SESSION["email"])){
        if(trim($_POST['textContent'])===""){
            echo "You need to write a message";
            header("Location: product.php");
        }
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = mail;
        $mail->Password = pass;
        $mail->Port = 587;
        $mail->AddAddress("ahmed_00400@outlook.com", "admin");
        $mail->SetFrom("wardaslim23112@gmail.com","ClickShop");
        $mail->Subject = "Contact Form";
        $mail->Body = "Name: ".$_SESSION['name']."\nEmail: ".$_SESSION['email']."\nMessage: ".$_POST['textContent'];
        $mail->isHTML(true);
    try{
        $mail->Send();
        $query = "INSERT INTO comments ( c_email, c_content) VALUES ('".$_SESSION['email']."', '".$_POST['textContent']."')";
        $result = $conn->query($query);
        echo "Message has been sent successfully";
    } catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header("Location: product.php");
    }
    else{
        echo "You need to login first";
        header("Location: ../login/login.php");
    }
}