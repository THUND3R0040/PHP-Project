<?php 


$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "ecommerce";


try{
    $conn = new mysqli($sname, $unmae, $password, $db_name) ;
}
catch(Exception $e){
    header("Location: ../database/db-failed.php");
    die();
}













?>