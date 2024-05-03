<?php
include '../database/db_connect.php';

$query = "
    SELECT u_name AS name, u_email AS email, COUNT(orderDate) AS nbOrders, IFNULL(SUM(total), 0) AS totalSpent 
    FROM users u 
    LEFT JOIN orders o ON o.email = u.u_email 
    GROUP BY u.u_email;
";


$stmt = $conn->prepare($query);
$stmt->execute();

$htmlUsers  = "";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $htmlUsers .= "
    <div class='swiper-slide'>
        <div class='edit'>edit Profile</div>
        <div class='profileInfo'>
        <div class='profileImgBg'>
            <img src='person.png'>
        </div>
        <div class='profileName'>
            <div>".$row['name']."</div>
            <div>".$row['email']."</div>
        </div>
        </div>
        <div class='profileStats'>
        <div>
            <span >Spent</span><br>
            <span >".$row['totalSpent']."$</span>
        </div>
        <div>
            <span>Did</span><br>
            <span >".$row['nbOrders']." orders</span>
        </div>
        <div class='delete' >delete</div>
        </div>
    </div>
    ";
}

if($htmlUsers == ""){
    $htmlUsers = "<h1 class='noUsers'>No Users</h1>";
}
?>
