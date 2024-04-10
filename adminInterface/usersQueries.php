<?php




include '../database/db_connect.php';



$query = "
select u_name as name, u_email as email , count(orderDate) as nbOrders , ifnull(sum(total),0) as totalSpent 
from users u 
left join orders o
on o.email = u.u_email 
group by u.u_email;
";
$result = mysqli_query($conn, $query);
$users = mysqli_num_rows($result);

$htmlUsers  = "";

while($row = mysqli_fetch_array($result)){
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







