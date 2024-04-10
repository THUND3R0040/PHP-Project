<?php



include '../database/db_connect.php';


$query = "select p_type,p_name,p_price,p_img from product";
$result = mysqli_query($conn, $query);

$htmlProducts="

";

while($row=mysqli_fetch_array($result)){
    $htmlProducts .= "
    <div class='swiper-slide'>
        <div class='editProduct'>edit Product</div>
        <div class='productInfo'>
        <div class='productImg'>
            <img src='../product_page/".$row['p_img']."'>
        </div>
        <div class='¨productName'>
            <div>".$row['p_name']."</div>
        </div>
        </div>
        <div class='productStats'>
        <div>
            <span >Type</span><br>
            <span >".$row['p_type']."</span>
        </div>
        <div>
            <span>Price</span><br>
            <span >".$row['p_price']."</span>
        </div>
        <div class='deleteProduct' >delete</div>
        </div>
    </div>
    ";
}

if($htmlProducts == ""){
    $htmlProducts = "<h1 class='noUsers'>No Products</h1>";
}
