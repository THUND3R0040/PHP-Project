<?php
if(isset($_SESSION['name'])){
    $parts = explode(" ", $_SESSION['name']);
    $name = $parts[0];
    if($_SESSION['isAdmin'] == 1){
        echo "<script>document.getElementById('a4').innerHTML='Hi, $name';</script>";
        echo"<script>document.getElementById('href4').innerHTML='Hi, $name';</script>";
        echo "<script>document.getElementById('a4').href='../adminInterface/admin.php';</script>";
        echo"<script>document.getElementById('href4').href='../adminInterface/admin.php';</script>";
    }
    else{
        echo "<script>document.getElementById('a4').innerHTML='Hi, $name';</script>";
        echo"<script>document.getElementById('href4').innerHTML='Hi, $name';</script>";
        echo "<script>document.getElementById('a4').href='../interface/userAccount.php';</script>";
        echo"<script>document.getElementById('href4').href='../interface/userAccount.php';</script>";
    }
}
else{
    echo "<script>document.getElementById('a4').innerHTML='LOGIN';</script>";
    echo "<script>document.getElementById('a4').href='../login/login.php';</script>";
    echo "<script>document.getElementById('href4').innerHTML='LOGIN';</script>";
    echo "<script>document.getElementById('href4').href='../login/login.php';</script>";
}