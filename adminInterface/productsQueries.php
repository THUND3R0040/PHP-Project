<?php
include '../database/db_connect.php';

$query = "SELECT p_type, p_name, p_price, p_img FROM product";
$stmt = $conn->query($query);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$htmlProducts = "";

foreach ($products as $row) {
    $htmlProducts .= "
    <div class='swiper-slide'>
        <div class='editProduct'>edit Product</div>
        <div class='productInfo'>
            <div class='productImg'>
                <img src='../product_page/" . $row['p_img'] . "'>
            </div>
            <div class='productName'>
                <div>" . $row['p_name'] . "</div>
            </div>
        </div>
        <div class='productStats'>
            <div>
                <span>Type</span><br>
                <span>" . $row['p_type'] . "</span>
            </div>
            <div>
                <span>Price</span><br>
                <span>" . $row['p_price'] . "</span>
            </div>
            <div class='deleteProduct'>delete</div>
        </div>
    </div>";
}

if (empty($products)) {
    $htmlProducts = "<h1 class='noProducts'>No Products</h1>";
}
?>
