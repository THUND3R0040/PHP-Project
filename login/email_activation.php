<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




//Load Composer's autoloader
require '../vendor/autoload.php';

function send_activation_mail($email,$activation_code,$name){
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mohamedgargouri97@gmail.com';
    $mail->Password = '';
    $mail->Port = 587;
    $mail->AddAddress($email, $name);
    $mail->SetFrom("wardaslim23112@gmail.com","ClickShop");
    $mail->Subject = "Account Activation";
    //add logo to the mail body
    $mail->AddEmbeddedImage('../logo.png', 'logo');
    $mail->Body = "<!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
      <table width='100%' cellspacing='0' cellpadding='0' style='max-width: 600px; margin: auto;'>
        <tr>
          <td style='background-color: #4fa284; padding: 10px; text-align: center; color: white;'>
            <h1 style='font-size: 24px;'>ClickShop</h1>
            <img src='cid:logo' alt='ClickShop' width='100' height='100'>
          </td>
        </tr>
        <tr>
          <td style='padding: 20px; text-align: center;'>
            <p style='font-size: 16px; color: #555;'>
              Hello,
            </p>
            <p style='font-size: 16px; color: #555;'>
              Thank you for registering with us. Please click the button below to activate your account.
            </p>
            <p style='margin: 30px 0;'>
              <!-- The link should lead to the activation URL -->
              <a href='http://localhost/x/WebProject/login/activate.php?email=$email&code=$activation_code' style='font-size:26px;background-color: #4fa284; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>
                Activate Account
              </a>
            </p>
            <p style='font-size: 16px; color: #555;'>
              If you did not request this, please ignore this email.
            </p>
          </td>
        </tr>
        <tr>
          <td style='background-color: #333; padding: 10px; text-align: center; color: white;'>
            <p style='font-size: 14px;'>
              &copy; 2024 ClickShop . All rights reserved.
            </p>
          </td>
        </tr>
      </table>
    </body>
    </html>";
    $mail->isHTML(true);
    try{
        $mail->Send();
        return true;
    } catch(Exception $e){
        return false;
    }
}
?>

