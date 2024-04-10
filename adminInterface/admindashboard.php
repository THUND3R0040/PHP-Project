<?php

include '../database/db_connect.php';
include 'dashboardQueries.php';
include 'usersQueries.php';
include 'salesQueries.php';
include "productsQueries.php";
include "commentsQueries.php";

session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['msg']==='dashboard'){ 
        $data = ['htmlContent' => $htmlContent, 'sales' => $incomes,'nbOrders'=>$nbOrders];
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);    
    }
    elseif($_POST['msg']==='users'){
        $data = ['htmlContent' => $htmlUsers];
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    elseif($_POST['msg']==='sales'){
        $data = ['htmlContent' => $htmlSales];
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    elseif($_POST['msg']==='products'){
        $data = ['htmlContent' => $htmlProducts];
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    elseif($_POST['msg']==='comments'){
        $data = ['htmlContent' => $htmlComments];
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    else{
        echo 'error';
    }
}
else{
    echo 'error';
}
?>



